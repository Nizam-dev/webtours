<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $postingan = post::orderBy('id','DESC')->get();
        return view('admin.post.index',compact('postingan'));
    }

    public function create()
    {
        return view('admin.post.create');
    }
    public function edit($id)
    {
        $post = post::find($id);
        return view('admin.post.edit',compact('post'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'price' => 'required',
            'waktu' => 'required',
            'thumnail' => 'required',
            'content' => 'required'
       ]);

        $postingan = $request->all();

        $content = $request->content;
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        $imageFile = $dom->getElementsByTagName('img');

        if($request->has('thumnail')){
            $file = $request->file('thumnail');
            $tujuan_upload = public_path('/images/thumnail');
            $nama_file = 'driver-bali-tour-'.date('dmYH').time().'.'.$file->getClientOriginalExtension();
            $file->move($tujuan_upload,$nama_file);
            $postingan['thumnail'] = $nama_file;
        }
 
       foreach($imageFile as $item => $image){
           $data = $image->getAttribute('src');
           if(substr($data, 0, 10) == "data:image"){

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name= "/images/content/" .'wisata-bali-tours-'. time().$item.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            
            $image->removeAttribute('src');
            $image->setAttribute('src', url('/').$path);

           }else{
                $url = $data;
                $info = pathinfo($url);
                $dataimg = file_get_contents($url);
                $image_name= "/images/content/" .'wisata-bali-tours-'. time().'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $dataimg);
                $image->removeAttribute('src');
                $image->removeAttribute('srcset');
                $image->setAttribute('src', url('/').$path);
                $image->setAttribute('srcset', url('/').$path);
           }
        }

      $content = $dom->saveHTML();
      $postingan["content"] = $content;

      post::create($postingan);
    
      return redirect('home')->with('success',"Berhasil Menambahkan Postingan");

    }

    public function update($id,Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'price' => 'required',
            'waktu' => 'required',
            'content' => 'required'
       ]);

        $postingan = $request->all();

        $content = $request->content;
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        $imageFile = $dom->getElementsByTagName('img');

        if($request->has('thumnail')){
            $file = $request->file('thumnail');
            $tujuan_upload = public_path('/images/thumnail');
            $nama_file = 'driver-bali-tour-'.date('dmYH').time().'.'.$file->getClientOriginalExtension();
            $file->move($tujuan_upload,$nama_file);
            $postingan['thumnail'] = $nama_file;
        }
 
       foreach($imageFile as $item => $image){
           $data = $image->getAttribute('src');
           if(substr($data, 0, 10) == "data:image"){

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name= "/images/content/" .'wisata-bali-tours-'. time().$item.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            
            $image->removeAttribute('src');
            $image->setAttribute('src', url('/').$path);

           }
        }

      $content = $dom->saveHTML();
      $postingan["content"] = $content;

      post::find($id)->update($postingan);
    
      return redirect('home')->with('success',"Berhasil Mengubah Postingan");

    }

    public function destroy($id)
    {
        post::find($id)->delete();
      return redirect('home')->with('success',"Berhasil Menghapus Postingan");
    }

}
