<?php

namespace App\Http\Controllers\Front;

use App\Models\Plant;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Kris\LaravelFormBuilder\FormBuilder;
use Kris\LaravelFormBuilder\FormBuilderTrait;
use App\Forms\PlantForm;


class PlantsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, FormBuilderTrait;

    private $formName;
    private $routeName;

    public function __construct()
    {
        $this->formName = 'PlantForm';
        $this->routeName = 'plants';
    }

    public function index(){

        $plants = Plant::all();

        return view('front.'.$this->routeName.'.index',compact('plants'));
    }

    public function create( FormBuilder $formBuilder,Request $request){
        $form = $formBuilder->create(PlantForm::class, [
            'method' => 'POST',
            'url' => route($this->routeName.'.store')
        ]);
        return view('front.'.$this->routeName.'.create')->with(compact('form'));

        //return view('front.'.$this->routeName.'.create',compact('form'));
    }

    public function store(Request $request){

        $attributes = $request->except(['_token']);

    $plant = new Plant();

    $plant->fill($attributes);


//        $plant = new Plant([
//            'name' => 'test'
//        ]);

        $plant->save();

        return redirect()->route('plants.index');

    }
    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }

}
