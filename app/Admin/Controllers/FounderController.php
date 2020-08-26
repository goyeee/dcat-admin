<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Founder;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class FounderController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Founder(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->founder_name;
            $grid->mobile_number;
            $grid->origanization_name;
            $grid->number_count;
            $grid->create_at;
            $grid->created_at;
            $grid->updated_at->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Founder(), function (Show $show) {
            $show->id;
            $show->founder_name;
            $show->mobile_number;
            $show->origanization_name;
            $show->number_count;
            $show->create_at;
            $show->created_at;
            $show->updated_at;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Founder(), function (Form $form) {
            $form->display('id');
            $form->text('founder_name');
            $form->text('mobile_number');
            $form->text('origanization_name');
            $form->text('number_count');
            $form->text('create_at');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
