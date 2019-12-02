<?php

namespace App\Http\Controllers\Backend;

use App\CategoryContract\CategoryContract;
use App\Http\Controllers\BaseController;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{


    /**
     * @var CategoryContract
     */
    private $categoryRepository;

//    public function __construct(CategoryRepository $categoryRepository)
//    {
//        $this->categoryRepository = $categoryRepository;
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->setPageTitle('category', 'category list');
//        $categories = $this->categoryRepository->listCategories();
//        dd($categories);
        return view('backend.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->setPageTitle('category', 'category create');
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
