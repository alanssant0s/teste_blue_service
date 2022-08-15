<?php
namespace App\View\Helper;


use Cake\View\Helper\FormHelper;
use Cake\Utility\Hash;
use Cake\View\View;
use Cake\Utility\Inflector;

class CustomFormHelper extends FormHelper {

    private $templates = [
        'button' => '<div clas="col-12"><button{{attrs}}>{{text}}</button></div>',
        'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
        'checkboxFormGroup' => '{{label}}',
        'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',
        'dateWidget' => '<div class="form-group">{{label}} {{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}</div>',
        'error' => '<div class="input-error">{{content}}</div>',
        'errorList' => '<ul>{{content}}</ul>',
        'errorItem' => '<li>{{text}}</li>',
        'file' => '<input type="file" name="{{name}}"{{attrs}}>',
        'fieldset' => '<fieldset{{attrs}}>{{content}}</fieldset>',
        'formStart' => '<form{{attrs}}>',
        'formEnd' => '</form>',
        'formGroup' => '{{label}}{{input}}',
        'hiddenBlock' => '<div style="display:none;">{{content}}</div>',
        'control' => '<input type="{{type}}" name="{{name}}"{{attrs}}/>',
        'input' => '<input type="{{type}}" name="{{name}}"{{attrs}}/>',
        'inputSubmit' => '<div clas="col-12"><input type="{{type}}"{{attrs}}/></div>',
        'inputContainer' => '<div>{{content}}</div>',
        'inputContainerError' => '{{content}}{{error}}',
        'label' => '<label class="form-label" {{attrs}}>{{text}}</label>',
        'nestingLabel' => '{{hidden}}{{input}}<label class="align-items-center mx-2 my-1"{{attrs}}>{{text}}</label>',
        'legend' => '<legend>{{text}}</legend>',
        'multicheckboxTitle' => '<legend>{{text}}</legend>',
        'multicheckboxWrapper' => '<fieldset{{attrs}}>{{content}}</fieldset>',
        'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
        'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
        'select' => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
        'selectMultiple' => '<select name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
        'radio' => '<input type="radio" class="form-check-input"  name="{{name}}" value="{{value}}"{{attrs}}>',
        'radioWrapper' => '<div class="radio form-check form-radio-primary mb-2">{{label}}</div>',
        'textarea' => '<textarea name="{{name}}"{{attrs}}>{{value}}</textarea>',
        'submitContainer' => '<div class="box-footer {{required}}">{{content}}</div>'
    ];

    public function __construct(View $View, array $config = [])
    {
        $this->_defaultConfig['templates'] = array_merge($this->_defaultConfig['templates'], $this->templates);
        parent::__construct($View, $config);
    }

    public function create($context = null, array $options = []) : string
    {
        $options += ['role' => 'form'];
        return parent::create($context, $options);
    }

    public function button(string $title, array $options = []): string
    {
        $options += ['escape' => false, 'secure' => false, 'class' => 'btn btn-primary'];
        $options['text'] = $title;
        return $this->widget('button', $options);
    }

    public function submit(?string $caption = null, array $options = []): string
    {
        $options += ['class' => 'btn btn-primary'];
        return parent::submit($caption, $options);
    }

    /**
     *
     * {@inheritDoc}
     * @see \Cake\View\Helper\FormHelper::input()
     * @deprecated 1.1.1 Use FormHelper::control() instead, due to \Cake\View\Helper\FormHelper::input() deprecation
     */
    public function input($fieldName, array $options = [])
    {

        $_options = [];

        if (!isset($options['type'])) {
            $options['type'] = $this->_inputType($fieldName, $options);
        }

        switch($options['type']) {
            case 'radio':
                break;
            case 'checkbox':
                $_options = ['class' => 'form-check form-check-input'];
                break;
            case 'select':
                $_options = ['class' => 'form-select mb-6'];
                break;
            default:
                $_options = ['class' => 'form-control'];
                break;

        }

        $options += $_options;

        return parent::control($fieldName, $options);
    }
    public function control(string $fieldName, array $options = []): string
    {

        $_options = [];

        if (!isset($options['type'])) {
            $options['type'] = $this->_inputType($fieldName, $options);
        }

        switch($options['type']) {
            case 'radio':
                break;
            case 'checkbox':
                $_options = ['class' => 'form-check form-check-input'];
                break;
            case 'select':
                $_options = ['class' => 'form-select mb-6'];
                break;
            default:
                $_options = ['class' => 'form-control'];
                break;

        }

        $options += $_options;

        return parent::control($fieldName, $options);
    }
}