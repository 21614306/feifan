<?php

namespace App\Admin\Controllers;

use App\Models\Company;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class CompanyController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Company(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('tel');
            $grid->column('add');
            $grid->column('article_id');
            $grid->column('website');
            $grid->column('qq');
            $grid->column('qrcode');
            $grid->column('field1');
            $grid->column('field2');
            $grid->column('field3');
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
        return Show::make($id, new Company(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('tel');
            $show->field('add');
            $show->field('article_id');
            $show->field('website');
            $show->field('qq');
            $show->field('qrcode');
            $show->field('field1');
            $show->field('field2');
            $show->field('field3');
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
        return Form::make(new Company(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('tel');
            $form->text('add');
            $form->text('article_id');
            $form->text('website');
            $form->text('qq');
            $form->text('qrcode');
            $form->text('field1');
            $form->text('field2');
            $form->text('field3');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
