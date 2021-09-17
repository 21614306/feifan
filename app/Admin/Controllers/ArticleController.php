<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;
use App\Models\ArticleType;
use Dcat\Admin\Widgets\Radio;

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
            $grid->column('id')->sortable();
            $grid->column('type');
            $grid->column('title');
            $grid->column('desc');
            $grid->column('content');
            $grid->column('cover');
            $grid->column('author');
            $grid->column('readNum');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
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
        return Show::make($id, new Article(), function (Show $show) {
            $show->field('id');
            $show->field('type');
            $show->field('title');
            $show->field('desc');
            $show->field('content');
            $show->field('cover');
            $show->field('author');
            $show->field('readNum');
            $show->field('created_at');
            $show->field('updated_at');

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
            $types = ArticleType::all();
            $options = array();
            foreach ($types as $type ) {
               array_push($options, $type->name);
            }
            $form->display('id');
            $form->text('title')->required();
            $form->radio('type')->options([
                'case_news'=>'案例动态',
                'company_news'=>'公司动态',
                'industry_news'=>'行业动态',
                'grs_news'=>'grs动态'
            ])->required();
            $form->text('desc')->required();
            $form->markdown('content')->imageDirectory('upload/image');
            $form->text('author')->required();
            $form->text('readNum')->required();
            $form->image('cover')->uniqueName()->autoUpload()->required();
            $form->display('created_at');
            $form->display('updated_at');
        });
    }


}
