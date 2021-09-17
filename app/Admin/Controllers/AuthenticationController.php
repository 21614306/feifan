<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Authentication;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class AuthenticationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Authentication(), function (Grid $grid) {
            // dd($grid);
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('type');
            $grid->column('introduction');
            $grid->column('article');
            $grid->column('fields');
            $grid->column('cover');
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
        return Show::make($id, new Authentication(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('type');
            $show->field('cover');
            $show->field('introduction');
            $show->field('article');
            $show->field('fields');
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
        return Form::make(new Authentication(), function (Form $form) {


            $form->display('id');
            $form->text('name')->required();
            $form->radio('type')->options([
                0 =>'客户验厂',
                1=>'体系验厂'
            ])->required();
            $form->text('introduction')->required();
            $form->text('article')->required();
            $form->text('fields')->required();
            $form->image('cover')->uniqueName()->required();
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
