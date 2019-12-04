<?php

namespace App\Http\Controllers\Backend;

use App\CategoryContract\CategoryContract;
use App\Http\Controllers\BaseController;
use App\Repositories\CategoryRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends BaseController
{


    /**
     * @var CategoryContract
     */
    private $categoryRepository;

    public function __construct(CategoryContract $categoryRepository)
    {

        $this->categoryRepository = $categoryRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->setPageTitle('category', 'category list');
        $categories = $this->categoryRepository->listCategories();

        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->setPageTitle('Category', 'Category create');
        $data['categories'] = $this->categoryRepository->createList();

        return view('backend.categories.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->setPageTitle('Category', 'Category create');
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191|unique:categories,name',
            'parent_id' => 'required|not_in:0',
            'image' => 'mimes:jpg,jpeg,png|max:1000'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $params = $request->except('_token');

        $category = $this->categoryRepository->createCategory($params);

        if (!$category) {
            Toastr::error('Error occurred while creating category', 'Category', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        } else {
            Toastr::success('Category added successfully', 'Category', ["positionClass" => "toast-top-right"]);
            return redirect()->route('categories.index');
        }

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
        $targetCategory = $this->categoryRepository->findCategoryById($id);
        $categories = $this->categoryRepository->listCategories();
        $this->setPageTitle('category', 'Edit Category :' . $targetCategory->name);
        return view('backend.categories.edit', compact('targetCategory', 'categories'));
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
