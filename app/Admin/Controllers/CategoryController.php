<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Category;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class CategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Category(), function (Grid $grid) {
            $grid->column('categoryid','ID')->sortable();
            $grid->column('parentid', 'Parent')->width('200px')->display(function($parentid){
                if($parentid == 0) {
                    return '-';
                }
                $category = new Category();
                return $category->parentname($parentid);
		    });
            $grid->categoryname;
            $grid->column('indextemlatepath','IndexPath')->image();
            $grid->listtemplatepath;
            $grid->detailtemplatepath;
            $grid->previewurl;
            $grid->keywords;
            $grid->description;
            $grid->sortid;
            $grid->viewcount;
            $grid->addtime;
            $grid->systemtime;
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('categoryid');
        
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
        return Show::make($id, new Category(), function (Show $show) {
            $show->categoryid;
            $show->categoryid;
            $show->languageid;
            $show->parentid;
            $show->categoryname;
            $show->indextemlatepath;
            $show->listtemplatepath;
            //$show->detailtemplatepath;
            $show->previewurl;
            $show->keywords;
            $show->description;
            $show->sortid;
            $show->viewcount;
            $show->addtime;
            $show->systemtime;
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Category(), function (Form $form) {
            $form->text('categoryid');
            $form->select('parentid')->options(function(){
		$category = new Category;
		return $category->topCategory();
	    });
            $form->text('categoryname');
            $form->image('indextemlatepath')->move('cms/article/'.date('Y-m-d'));
            $form->image('listtemplatepath')->move('cms/article/' . date('Y-m-d'));
            $form->display('detailtemplatepath');
            $form->text('previewurl');
            $form->text('keywords');
            $form->text('description');
            $form->text('sortid');
            $form->text('viewcount');
            $form->text('addtime');
            $form->text('systemtime');
        });
    }
}
