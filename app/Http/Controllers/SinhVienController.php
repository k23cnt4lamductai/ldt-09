<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SinhVien;
class SinhVienController extends Controller
{
// CRUD
public function index()
{
// Lấy toàn bộ dữ liệu trong bảng sinh viên
$sinhViens = SinhVien::all();
return view('sinhvien.index', ['sinhViens'=>$sinhViens]);
}
}