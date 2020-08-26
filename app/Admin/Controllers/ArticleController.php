<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Article;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class ArticleController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Article(), function (Grid $grid) {
            $grid->articleid->sortable();
            $grid->languageid;
            $grid->title;
            $grid->subtitle;
            $grid->comefrom;
            $grid->author;
            $grid->summary;
            $grid->isoriginal;
            $grid->isbold;
            $grid->linkurl;
            $grid->usertypeid;
            $grid->thumbimagepath;
            $grid->tabletypeid;
            $grid->viewcount;
            $grid->favoritecount;
            $grid->likecount;
            $grid->articlestatus;
            $grid->addtime;
            $grid->istask;
            $grid->publishtime;
            $grid->adminid;
            $grid->systemtime;
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('articleid');
        
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
        return Show::make($id, new Article(), function (Show $show) {
            $show->articleid;
            $show->articleid;
            $show->languageid;
            $show->title;
            $show->subtitle;
            $show->comefrom;
            $show->author;
            $show->summary;
            $show->isoriginal;
            $show->isbold;
            $show->linkurl;
            $show->usertypeid;
            $show->thumbimagepath;
            $show->tabletypeid;
            $show->viewcount;
            $show->favoritecount;
            $show->likecount;
            $show->articlestatus;
            $show->addtime;
            $show->istask;
            $show->publishtime;
            $show->adminid;
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
        return Form::make(new Article(), function (Form $form) {
            $form->display('articleid');
            $form->text('languageid');
            $form->text('title');
            $form->text('subtitle');
            $form->text('comefrom');
            $form->text('author');
            $form->text('summary');
            $form->text('isoriginal');
            $form->text('isbold');
            $form->text('linkurl');
            $form->text('usertypeid');
            $form->text('thumbimagepath');
            $form->text('tabletypeid');
            $form->text('viewcount');
            $form->text('favoritecount');
            $form->text('likecount');
            $form->text('articlestatus');
            $form->text('addtime');
            $form->text('istask');
            $form->text('publishtime');
            $form->text('adminid');
            $form->text('systemtime');
        });
    }
}
