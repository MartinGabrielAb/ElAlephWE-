<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Articulo;
use App\Categoria;
use DB;
class ClienteArticuloController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $request)
    {
       
            $query = trim($request->get('searchText'));
            $articulos=DB::table('articulo as a')
            ->join('categoria as c','a.idcategoria','=','c.idcategoria')
            ->select('a.idarticulo','a.nombre','a.codigo','a.stock','a.precio','c.nombre as categoria','a.descripcion','a.imagen','a.estado')
            ->where('a.nombre','LIKE','%'.$query.'%')
            ->where('a.estado','=','Activo')
            ->where('a.stock', '>' , 0)
            ->orwhere('a.codigo','LIKE','%'.$query.'%')
            ->orderBy('a.nombre','asc')
            ->paginate(6);
            $categorias=DB::table('categoria as c')
            ->orderBy('c.nombre')
            ->get();
            $searchText=$query;
            return view('productos',compact('articulos','searchText','categorias')/*["articulos"=>$articulo,"searchText"=>$query,"categorias"=>$categoria]*/);
        
    }
    public function searchCategoria(Request $request,$nombre)
    {
        if($request)
        {
            $query = trim($request->get('searchText'));
            $articulo=DB::table('articulo as a')
            ->join('categoria as c','a.idcategoria','=','c.idcategoria')
            ->select('a.idarticulo','a.nombre','a.codigo','a.stock','a.precio','c.nombre as categoria','a.descripcion','a.imagen','a.estado')
            ->where('a.nombre','LIKE','%'.$query.'%')
            ->where('c.nombre','=', $nombre)
            ->where('a.estado','=','Activo')
            ->orwhere('a.codigo','LIKE','%'.$query.'%')
            ->orderBy('a.idarticulo','desc')
            ->paginate(3);            
            $categoria=DB::table('categoria as c')
            ->get();
            
            return view('productos',["articulos"=>$articulo,"searchText"=>$query,"categorias"=>$categoria]);
        }
    }
}
