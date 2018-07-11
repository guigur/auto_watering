<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PlantForm extends Form
{
    public function buildForm()
    {
        $table = 'plants';

        $this->add('name', 'text', [
            'label' => ucfirst(__($table.'.attributes.name')),
        ]);

        $this->add('latin_name', 'text', [
            'label' => ucfirst(__($table.'.attributes.latin_name')),
        ]);

        $this->add('submit', 'submit', [
            'label' => __('operations.submit')
        ]);



    }
}

