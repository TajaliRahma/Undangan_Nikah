<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;

class WishController extends Controller
{
    /**
     * ID Spreadsheet Google Sheets
     */
    private $spreadsheetId = '16zvFLHSBHAisL5Gz4NeJpgjvoCM6PYahUt59IUKgOhM';

    /**
     * Setup Google API Client
     */
    private function getClient()
    {
        $client = new Google_Client();
        $client->setApplicationName('Wedding Wishes');
        $client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
        $client->setAuthConfig(storage_path('app/credentials.json'));
        $client->setAccessType('offline');
        return $client;
    }

    /**
     * Tampilkan halaman + ambil semua ucapan dari Google Sheets
     */
    public function index()
    {
        try {
            $client = $this->getClient();
            $service = new Google_Service_Sheets($client);

            // Ambil semua data ucapan
            $range = 'Sheet1!A2:D';
            $response = $service->spreadsheets_values->get($this->spreadsheetId, $range);
            $values = $response->getValues() ?? [];

        } catch (\Exception $e) {
            $values = [];
            session()->flash('error', 'Gagal memuat data dari Google Sheets: ' . $e->getMessage());
        }

        return view('home', compact('values'));
    }

    /**
     * Simpan ucapan ke Google Sheets
     */
    public function store(Request $request)
{
    $request->validate([
        'name'       => 'required|string|max:100',
        'attendance' => 'required|string|max:50',
        'message'    => 'required|string|max:255',
    ]);

    try {
        // Inisialisasi Google Client & Sheets Service
        $client = $this->getClient();
        $service = new Google_Service_Sheets($client);

        // Data yang akan ditulis ke Google Sheets
        $values = [[
            $request->name,
            $request->attendance,
            $request->message,
            now()->toDateTimeString()
        ]];

        $body = new Google_Service_Sheets_ValueRange(['values' => $values]);
        $params = ['valueInputOption' => 'RAW'];
        $range = 'Sheet1!A2';

        // Append ke Google Sheet
        $service->spreadsheets_values->append(
            $this->spreadsheetId,
            $range,
            $body,
            $params
        );

        /**
         * =======================
         *   RESPONSE UNTUK AJAX
         * =======================
         * Format disamakan dengan kebutuhan Javascript kamu:
         *   data.name
         *   data.attendance
         *   data.message
         */
        if ($request->ajax()) {
            return response()->json([
                'success'    => true,
                'name'       => $request->name,
                'attendance' => $request->attendance,
                'message'    => $request->message,
                'created_at' => now()->toDateTimeString()
            ]);
        }

        // Normal redirect (non-AJAX)
        return redirect('/home')->with('success', 'Ucapan berhasil dikirim!');

    } catch (\Exception $e) {

        // Response error bila AJAX
        if ($request->ajax()) {
            return response()->json([
                'success' => false,
                'error'   => $e->getMessage()
            ], 500);
        }

        // Normal redirect error
        return redirect('/home')->with('error', 'Gagal mengirim ucapan: ' . $e->getMessage());
    }
}

}
