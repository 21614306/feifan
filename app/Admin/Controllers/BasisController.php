<?php

namespace App\Admin\Controllers;

use App\Models\Basis;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class BasisController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Basis(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('logo');
            $grid->column('tel');
            $grid->column('url');
            $grid->column('qrcode');
            $grid->column('index_banner_1');
            $grid->column('index_banner_2');
            $grid->column('index_banner_3');
            $grid->column('company_id');
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
        return Show::make($id, new Basis(), function (Show $show) {
            $show->field('id');
            $show->field('logo');
            $show->field('tel');
            $show->field('url');
            $show->field('qrcode');
            $show->field('index_banner_1');
            $show->field('index_banner_2');
            $show->field('index_banner_3');
            $show->field('company_id');
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
        return Form::make(new Basis(), function (Form $form) {
            $form->display('id');
            $form->image('logo')->uniqueName()->required();
            $form->text('tel');
            $form->url('url');
            $form->image('qrcode')->uniqueName();
            $form->image('index_banner_1')->required();
            $form->image('index_banner_2');
            $form->image('index_banner_3');
            $form->text('company_id');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
