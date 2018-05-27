<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Peminjaman;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function booksIndex()
    {
        return view('books.index');
    }

    public function manageLoans()
    {
        return view('admin.manage-loans');
    }

    public function loansRequest()
    {
        return view('admin.loans-request');
    }

    public function loansRequest2()
    {
        return view('admin.loans-request2');
    }

    public function verifyMember()
    {
        return view('admin.verify-member');
    }

    public function listMember()
    {
        $users = User::where('name', '!=', 'admin')->get();

        return view('admin.list-member', compact('users'));
    }

    public function denda_index()
    {
        $data['peminjamans'] = Peminjaman::join('users', 'users.id', '=', 'peminjamen.user_id')
            ->join('books', 'books.id', '=', 'peminjamen.book_id')
            ->select('users.nrp',
                'users.name as username',
                'users.jurusan as userjurusan',
                'users.email as useremail',
                'users.no_telp as userno_telp',
                'peminjamen.*',
                'books.*')
            ->where('denda', '!=', '0')
            ->get();
        return view('admin.denda', $data);
    }

    public function denda(Request $request)
    {
        return $this->denda_index();
    }

    public function editMember()
    {
        return view('admin.edit-member');
    }

    public function editBook($id)
    {
//        $peminjamanSaya = [];
        if ($id === "1")
        {
            $peminjamanSaya = [
                [
                    'judul' => "Cracking the Coding Interview",
                    'pengarang' => "Rogo Jagad Alit",
                    'kode' => "TC-001",
                    'isbn' => '978-0984782857',
                    'tahun' => '2015',
                    'penerbit' => 'Amazon Books',
                    'edisi' => '1'
                ]
            ];
        }else{
            $peminjamanSaya = [
                [
                    'judul' => "Mengungkap Rahasia Mandi Pagi",
                    'pengarang' => "Bobby",
                    'kode' => "TC-002",
                    'isbn' => '978-0984782858',
                    'tahun' => '2013',
                    'penerbit' => 'Stangstung Books',
                    'edisi' => '1'
                ]
            ];
        }

//        dd($peminjamanSaya);

        return view('admin.edit-book')->with('peminjamans', $peminjamanSaya);
    }

    public function addBook()
    {
        return view('admin.add-book');
    }

    public function showBook()
    {
        return view('admin.show-book');
    }

    public function manageLoanDetail()
    {
        return view('admin.manage-loan-detail');
    }

    public function verifyMemberDetail()
    {
        return view('admin.verify-member-details');
    }

    public function memberDetails()
    {
        return view('admin.member-details');
    }

    public function cariPermohonanMember(Request $request)
    {
        $nama = request(['search']);
//        dd($nama);

        if (strcmp($nama['search'], 'aditya pratama') == 0)
        {
            return redirect('/verify-member-found')->with('name', $nama['search']);
        }
        else{
            return redirect('/verify-member-not-found')->with('name', $nama['search']);
        }
    }

    public function cariPermohonanPeminjaman(Request $request)
    {
        $nama = request(['search']);
//        dd($nama);

        if (strcmp($nama['search'], 'aditya pratama') == 0)
        {
            return redirect('/admin/loans-request')->with('name', $nama['search']);
        }
        else{
            return redirect('/admin/loans-request-not-found')->with('name', $nama['search']);
        }
    }
}
