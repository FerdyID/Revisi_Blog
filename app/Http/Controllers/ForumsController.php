<?php

namespace App\Http\Controllers;

//use App\Http\Requests\Buku\BukuCreateRequest;
//use App\Http\Requests\Buku\BukuEditRequest;
use App\Domain\Entities\Buku;
use App\Domain\Repositories\ForumsRepository;
use App\Http\Requests\Artikel\ForumsRequest;
use App\Http\Requests\Artikel\FotoFormRequest;
use App\Http\Requests\Master\PdfRequest;
use Illuminate\Http\Request;
use App\Domain\Repositories\BukuRepository;

//use App\Http\Requests\Buku\PasswordRequest;


class ForumsController extends Controller
{

    /**
     * @var BukuInterface
     */
    protected $forums;

    /**
     * BukuController constructor.
     * @param BukuInterface $forums
     */
    public function __construct(ForumsRepository $forums)
    {
        $this->forums = $forums;
//        $this->middleware('auth');
    }

    /**
     * @api {get} api/contacts Request Buku with Paginate
     * @apiName GetBukuWithPaginate
     * @apiGroup Buku
     *
     * @apiParam {Number} page Paginate forums lists
     */
    public function index(Request $request)
    {
        return $this->forums->paginate(10, $request->input('page'), $column = ['*'], '', $request->input('term'));
    }

    /**
     * @api {get} api/contacts/id Request Get Buku
     * @apiName GetBuku
     * @apiGroup Buku
     *
     * @apiParam {Number} id id_contact
     * @apiSuccess {Number} id id_contact
     * @apiSuccess {Varchar} name name of forums
     * @apiSuccess {Varchar} address name of address
     * @apiSuccess {Varchar} email email of forums
     * @apiSuccess {Number} phone phone of forums
     */
    public function show($id)
    {
        return $this->forums->findById($id);
    }

    /**
     * @api {post} api/contacts/ Request Post Buku
     * @apiName PostBuku
     * @apiGroup Buku
     *
     *
     * @apiParam {Varchar} name name of forums
     * @apiParam {Varchar} email email of forums
     * @apiParam {Varchar} address email of address
     * @apiParam {Float} phone phone of forums
     * @apiSuccess {Number} id id of forums
     */
    public function store(\App\Http\Requests\ForumsRequest $request)
    {
        return $this->forums->createdata($request->all());
    }

    /**
     * @api {put} api/contacts/id Request Update Buku by ID
     * @apiName UpdateBukuByID
     * @apiGroup Buku
     *
     *
     * @apiParam {Varchar} name name of forums
     * @apiParam {Varchar} email email of forums
     * @apiParam {Varchar} address address of forums
     * @apiParam {Float} phone phone of forums
     *
     *
     * @apiError EmailHasRegitered The Email must diffrerent.
     */
    public function update(Request $request, $id)
    {
        return $this->forums->update($id, $request->all());
    }

    /**
     * @api {delete} api/contacts/id Request Delete Buku by ID
     * @apiName DeleteBukuByID
     * @apiGroup Buku
     *
     * @apiParam {Number} id id of forums
     *
     *
     * @apiError BukuNotFound The <code>id</code> of the Buku was not found.
     * @apiError NoAccessRight Only authenticated Admins can access the data.
     */
    public function destroy($id)
    {
        return $this->forums->delete($id);
    }
    public function Upload1(FotoFormRequest $request)
    {
        $file1 = $request->file('foto');

        $original_name1 = $file1->getClientOriginalName();
        $arr1 = str_replace('-', '', $original_name1);


        $fileName1 = date('dmYhi') . $arr1;
        $destinationPath = public_path() . '/assets/foto_forums';
        $file1->move($destinationPath, $fileName1);
        return response()->json(['created' => true], 200);
    }

    public function kunci($id)
    {
        return $this->forums->kunci($id);
    }

}