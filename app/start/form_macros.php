<?php 

/*
|--------------------------------------------------------------------------
| Register form macros for bootstrap 3 styling
|--------------------------------------------------------------------------
| http://forumsarchive.laravel.io/viewtopic.php?id=11960
|
*/


Form::macro('bText', function($name, $label = null, $value = null, $attributes = array())
{
    $element = Form::text($name, $value, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

Form::macro('bPassword', function($name, $label = null, $attributes = array())
{
    $element = Form::password($name, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

Form::macro('bTextarea', function($name, $label = null, $value = null, $attributes = array())
{
    $element = Form::textarea($name, $value, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

Form::macro('bSelect', function($name, $label = null, $options, $value = null, $attributes = array())
{
    $element = Form::select($name, $options, $value, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

Form::macro('bSelectMultiple', function($name, $label = null, $options, $value = null, $attributes = array())
{
    $attributes = array_merge($attributes, ['multiple' => true]);
    $element = Form::select($name, $options, $value, fieldAttributes($name, $attributes));

    return fieldWrapper($name, $label, $element);
});

Form::macro('bCheckbox', function($name, $label = null, $value = 1, $checked = null, $attributes = array())
{
    $attributes = array_merge(['id' => 'id-field-' . $name], $attributes);

    $out = '<div class="checkbox';
    $out .= fieldError($name) . '">';
    $out .= '<label>';
    $out .= Form::checkbox($name, $value, $checked, $attributes) . ' ' . $label;
    $out .= '</div>';

    return $out;
});

function fieldWrapper($name, $label, $element)
{
    $out = '<div class="form-group';
    $out .= fieldError($name) . '">';
    $out .= fieldLabel($name, $label);
    $out .= $element;
    $out .= '</div>';

    return $out;
}

function fieldError($field)
{
    $error = '';

    if ($errors = Session::get('errors'))
    {
        $error = $errors->first($field) ? ' has-error' : '';
    }

    return $error;
}

function fieldLabel($name, $label)
{
    if (is_null($label)) return '';

    $name = str_replace('[]', '', $name);

    $out = '<label for="id-field-' . $name . '" class="control-label">';
    $out .= $label . '</label>';

    return $out;
}

function fieldAttributes($name, $attributes = array())
{
    $name = str_replace('[]', '', $name);

    return array_merge(['class' => 'form-control', 'id' => 'id-field-' . $name], $attributes);
}