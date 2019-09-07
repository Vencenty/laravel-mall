<?php

namespace App\Admin\Controllers;

use App\Models\GoodsCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\GoodsCategory';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GoodsCategory);

        $grid->column('id', __('Id'));
        $grid->column('parent_id', __('Parent id'));
        $grid->column('order', __('Order'));
        $grid->column('title', __('Title'));
        $grid->column('icon', __('Icon'));
        $grid->column('uri', __('Uri'));
        $grid->column('permission', __('Permission'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(GoodsCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_id', __('Parent id'));
        $show->field('order', __('Order'));
        $show->field('title', __('Title'));
        $show->field('icon', __('Icon'));
        $show->field('uri', __('Uri'));
        $show->field('permission', __('Permission'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new GoodsCategory);

        $form->number('parent_id', __('Parent id'));
        $form->number('order', __('Order'));
        $form->text('title', __('Title'));
        $form->text('icon', __('Icon'));
        $form->text('uri', __('Uri'));
        $form->text('permission', __('Permission'));

        return $form;
    }
}
