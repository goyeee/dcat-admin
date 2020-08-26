<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Distributor;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class DistributorController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Distributor(), function (Grid $grid) {
            $grid->id->sortable();
            $grid->mobile_number;
            $grid->first_name;
            $grid->last_name;
            $grid->birthday->sortable();
            $grid->nick_name;
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
        return Show::make($id, new Distributor(), function (Show $show) {
            $show->id;
            $show->mobile_number;
            $show->first_name;
            $show->last_name;
            $show->birthday;
            $show->nick_name;
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
        return Form::make(new Distributor(), function (Form $form) {
            $form->display('id');
            $form->text('mobile_number');
            $form->text('first_name');
            $form->text('last_name');
            $form->text('birthday');
            $form->text('nick_name');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
