<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProjectResource;

class MenuController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return $this->sendResponse(Menu::collection($menus), 'Menus retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'image' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $menu = Menu::create($input);

        return $this->sendResponse(new MenuResource($menu), 'Menu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $menu = Menu::find($id);
        if (is_null($menu)) {
            return $this->sendError('Product not found.');
        }

        return $this->sendResponse(new MenuResource($menu), 'Menu retrieved successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'image' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $menu->name = $input['name'];
        $menu->detail = $input['image'];
        $menu->detail = $input['description'];
        $menu->save();

        return $this->sendResponse(new ProductResource($menu), 'Menu updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return response(['message' => 'Deleted']);
    }
}
