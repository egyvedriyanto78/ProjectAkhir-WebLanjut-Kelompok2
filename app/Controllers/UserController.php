<?php

namespace App\Controllers;
use App\Models\DokterModel;
use App\Models\PasienModel;
use App\Models\RecordModel;

class UserController extends BaseController
{
    public $pasienModel;
    public $dokterModel;
    public $riwayat;
    public $rekam;
    protected $helpers = ['form'];
    public function __construct(){
        $this->pasienModel= new PasienModel();
        $this->dokterModel= new DokterModel();
        $this->rekam= new RecordModel();        
    }
    public function index()
    {
        
        $data=[
            'title' => 'Selamat Datang!',              
        ];
        return view('index', $data);
    }
    public function about(): string
    {
        $data=[
            'title' => 'About',              
        ];
        return view('about', $data);
    }
    public function service(): string
    {
        $data=[
            'title' => 'Service',              
        ];
        return view('service', $data);
    }
    public function doctor(): string
    {
        $data=[
            'title' => 'Daftar Dokter',              
        ];
        return view('team', $data);
    }
    public function appointment($id)
    {                

        $data=[
            'title' => 'Buat Janji',            
            'pasien'=> $this->pasienModel->getPasien($id),            
        ];    
        return view ('appointment', $data);
    }
    public function store($id)
    {        
        $riwayat= new RecordModel();
        $riwayat->save([
            'id_pasien' =>user()->id,
            'nama'      =>$this->request->getVar('nama'),
            'usia'      =>$this->request->getVar('usia'),            
            'tanggal'=> $this->request->getVar('tanggal'),
            'keluhan'   =>$this->request->getVar('keluhan'),
        ]);            
        
        return redirect()->to('/');
    }
    public function show_janji($id_pasien){                
        $data=[
            'title'=>'Janji Anda',
            'record'=>$this->rekam->getRekam($id_pasien),
        ];
        // dd($data);
        return view('janji_pasien', $data);
    }
    public function profile($id)
    {        
        $db         = \Config\Database::connect();
        $builder    = $db->table('users');
        $builder->select('users.id as userid, username, email, nama, kontak, jenis_kelamin');
        $builder->join('auth_groups_users','auth_groups_users.user_id = users.id');
        $builder->join('auth_groups','auth_groups.id =  auth_groups_users.group_id');
        $builder->where('users.id',$id);
        $query      = $builder->get();

        $data = [
            'title' => 'Profile',
            'users' => $query->getRow(),
        ];
        
        return view ('pasien_profile', $data);
    }

    public function pasien_edit($id)
    {

        $data = [
            'title' => 'Lengkapi Data',
            'pasien'=> $this->pasienModel->getPasien($id)

        ];
        return view('pasien_edit', $data);
    }
    public function update_pasien($id)
    {
        $data=[
            'nama'  => $this->request->getVar('nama'),
            'kontak'=> $this->request->getVar('telepon'),
        ];
        if($this->request->getVar('jenis_kelamin')!=''){
            $data['jenis_kelamin']=$this->request->getVar('jenis_kelamin');
        }
        $this->pasienModel->updatePasien($id, $data);
        return redirect()->to('profile/'.user()->id);
    }
}
