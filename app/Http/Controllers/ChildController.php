<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controllers;
use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;
use Carbon\Carbon;

use function Laravel\Prompts\error;

class ChildController
{
    public function showForm()
    {
        return view('form');
    }

    public function APIValidation(){
        // $data = request()->all();
        return Child::all();
    }

    public function submitForm(Request $request)
    {
        // Log::info('This is an informational message.');
        // Validate the request
        try{
            // ganti tanggal
            $request->validate([
                'nama_anak' => 'required|string|max:255',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'tempat_lahir' => 'required|string|max:255',
                'tanggal_lahir' => 'required',
                'alamat' => 'required|string',
                'foto' => 'nullable|file|mimes: pdf,jpg,jpeg,png,gif,svg',
                'akte_lahir' => 'nullable|file|mimes: pdf,jpg,jpeg,png,gif,svg',
                'imunisasi_lengkap' => 'nullable|file|mimes: pdf,jpg,jpeg,png,gif,svg',
                'nama_ayah' => 'required|string|max:255',
                'kerja_ayah' => 'required|string|max:255',
                'hp_ayah' => 'required|string|max:255',
                'email_ayah' => 'required|string|email|max:255',
                'nama_ibu' => 'required|string|max:255',
                'kerja_ibu' => 'required|string|max:255',
                'hp_ibu' => 'required|string|max:255',
                'email_ibu' => 'required|string|email|max:255',
                'ktp_ayah' => 'required|file|mimes: pdf,jpg,jpeg,png,gif,svg',
                'ktp_ibu' => 'required|file|mimes: pdf,jpg,jpeg,png,gif,svg',
                'foto_kopi_kartu_keluarga' => 'required|file|mimes: pdf,jpg,jpeg,png,gif,svg'


            ]);

            // Store file uploads

            $fotoName = 'FOTO-'. str_replace(' ', '', $request->nama_anak) . $request->file('foto')->getClientOriginalName() ;
            $akteName = 'AKTE-' . str_replace(' ', '', $request->nama_anak) . $request->file('akte_lahir')->getClientOriginalName();
            $imunisasiName = 'IMUNISASI-' . str_replace(' ', '', $request->nama_anak) . $request->file('imunisasi_lengkap')->getClientOriginalName();
            $ktpayahName = 'KTPAYAH-' . str_replace(' ', '', $request->nama_anak) . $request->file('ktp_ayah')->getClientOriginalName();
            $ktpibuName = 'KTPIBU-' . str_replace(' ', '', $request->nama_anak) . $request->file('ktp_ibu')->getClientOriginalName();
            $ftkkName = 'FTKK-' . str_replace(' ', '', $request->nama_anak) . $request->file('foto_kopi_kartu_keluarga')->getClientOriginalName();
            $fotoPath = $request->file('foto') ? $request->file('foto')->storeAs('foto', $fotoName, 'public') : null;
            $akteLahirPath = $request->file('akte_lahir') ? $request->file('akte_lahir')->storeAs('akte_lahir', $akteName, 'public') : null;
            $imunisasiLengkapPath = $request->file('imunisasi_lengkap') ? $request->file('imunisasi_lengkap')->storeAs('imunisasi_lengkap', $imunisasiName, 'public') : null;
            $ktpayahPath = $request->file('ktp_ayah') ? $request->file('ktp_ayah')->storeAs('ktp_ayah', $ktpayahName, 'public') : null;
            $ktpibuPath = $request->file('ktp_ibu') ? $request->file('ktp_ibu')->storeAs('ktp_ibu', $ktpibuName, 'public') : null;
            $fotokopikartukeluargaPath = $request->file('foto_kopi_kartu_keluarga') ? $request->file('foto_kopi_kartu_keluarga')->storeAs('foto_kopi_kartu_keluarga', $ftkkName, 'public') : null;
            $formattedDate = Carbon::parse($request->tanggal_lahir);
            // Save data to database
            Child::create([
                'nama_anak' => $request->nama_anak,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                // 'tanggal_lahir' => \Carbon\Carbon::createFromFormat('Y-m-d', $request->tanggal_lahir)->format('d/m/Y'),
                'tanggal_lahir' => $formattedDate->format(('Y-m-d')),
                'alamat' => $request->alamat,
                'foto' => $fotoPath,
                'akte_lahir' => $akteLahirPath,
                'imunisasi_lengkap' => $imunisasiLengkapPath,
                'nama_ayah' => $request->nama_ayah,
                'kerja_ayah' => $request->kerja_ayah,
                'hp_ayah' => $request->hp_ayah,
                'email_ayah' => $request->email_ayah,
                'nama_ibu' => $request->nama_ibu,
                'kerja_ibu' => $request->kerja_ibu,
                'hp_ibu' => $request->hp_ibu,
                'email_ibu' => $request->email_ibu,
                'ktp_ayah' => $ktpayahPath,
                'ktp_ibu' => $ktpibuPath,
                'foto_kopi_kartu_keluarga' => $fotokopikartukeluargaPath,
            ]);
            return redirect()->route('form.show')->with('success', 'Data saved successfully!');
        }
        catch(\Exception $e){
            $formattedDate = Carbon::parse($request->tanggal_lahir);
            Log::info($formattedDate->format(('d/m/Y')));
            Log::info('This is an error message.'. $e->getMessage());
            // Log::info(Child::all());

            return redirect()->route('form.show')->with('error', 'Data failed to save!');
        }
    }
}
