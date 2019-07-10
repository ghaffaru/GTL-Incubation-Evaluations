<?php

namespace App\Admin\Controllers;

use App\Survey;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SurveyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Survey';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Survey);

        
        // $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        // $grid->column('updated_at', __('Updated at'));
        $grid->column('rating', __('Rating'));
        $grid->column('inspire', __('Inspire'));
        $grid->column('best_part', __('Best part'));
        $grid->column('worst', __('Worst'));
         $grid->column('created_at', __('Date'));

        // $grid->column('interesting', __('Interesting'));
        // $grid->column('relevant', __('Relevant'));
        // $grid->column('inspiring', __('Inspiring'));
        // $grid->column('satisfy', __('Satisfy'));
        // $grid->column('problem', __('Problem'));
        // $grid->column('food', __('Food'));
        // $grid->column('food_selection', __('Food selection'));
        // $grid->column('changes', __('Changes'));
        // $grid->column('thoughts', __('Thoughts'));

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
      $user = Survey::findOrFail($id)->user->name;
        $show = new Show(Survey::findOrFail($id));

        $show->field('id', __('Id'));
        // $show->field('user_id',$user, 'user');
      //   $show->author('Name of user', function ($author) {
      //
      //     $author->setResource('/admin/users');
      //
      //     // $author->id();
      //      $author->name();
      //     // $author->email();
      // });
        $show->display('user.name','User');
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('rating', __('Rating'));
        $show->field('inspire', __('Inspire'));
        $show->field('best_part', __('Best part'));
        $show->field('worst', __('Worst'));
        $show->field('interesting', __('Interesting'));
        $show->field('relevant', __('Relevant'));
        $show->field('inspiring', __('Inspiring'));
        $show->field('satisfy', __('Satisfy'));
        $show->field('problem', __('Problem'));
        $show->field('food', __('Food'));
        $show->field('food_selection', __('Food selection'));
        $show->field('changes', __('Changes'));
        $show->field('thoughts', __('Thoughts'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Survey);

        $form->number('user_id', __('User id'));
        $form->number('rating', __('Rating'));
        $form->number('inspire', __('Inspire'));
        $form->text('best_part', __('Best part'));
        $form->text('worst', __('Worst'));
        $form->text('interesting', __('Interesting'));
        $form->text('relevant', __('Relevant'));
        $form->text('inspiring', __('Inspiring'));
        $form->text('satisfy', __('Satisfy'));
        $form->text('problem', __('Problem'));
        $form->number('food', __('Food'));
        $form->text('food_selection', __('Food selection'));
        $form->text('changes', __('Changes'));
        $form->text('thoughts', __('Thoughts'));

        return $form;
    }
}
