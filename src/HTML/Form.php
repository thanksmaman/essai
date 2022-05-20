<?php
namespace App\HTML;
class Form{
    private $data;
    private $errors;
    public function __construct($data, array $errors = [])
    {
        $this->data = $data;
        $this->errors = $errors;
    }
    public function input($key,$label,$placeholder,?string $style = '')
    {
        $type = $key === "password" ? "password":"text";
        return <<<HTML
            <div class="form-group">
                <label for="field{$key}">{$label}</label>
                <input type="{$type}" id="field{$key}" class="form-control"  value="" name="{$key}" placeholder="{$placeholder}" style="{$style}">
                <span class="text-danger" id="error_{$key}"></span>
            </div>
HTML;
    }

    public function textarea($key,$label,?string $placeholder = '')
    {
        return <<<HTML
            <div class="form-group">
                <label for="field{$key}">{$label}</label>
                <textarea class="form-control" name="{$key}" id="field{$key}" style="height:39px" placeholder="{$placeholder}"></textarea>
                <span class="text-danger" id="error_{$key}"></span>
            </div>

HTML;
    }
    public function date($key,$label,?string $placeholder ='')
    {
        return <<<HTML
            <div class="form-group">
                <label for="field{$key}">{$label}</label>
                <input type="date" id="field{$key}" class="form-control"  value="" name="{$key}" placeholder="{$placeholder}">
                <span class="text-danger" id="error_{$key}"></span>
            </div>
    HTML;
    }
    public function img($key,$label)
    {
        return <<<HTML
            <div class="form-group">
                <label for="field{$key}">{$label}</label>
                <input type="file" id="field{$key}" class="form-control" name="{$key}" placeholder="fichier">
                <span class="text-danger" id="error_{$key}"></span>
            </div>
    HTML;
    }
    public function select($key,$label,?string $style = '')
    {
        return <<<HTML
        <div class="form-group"  style="{$style}" id="div{$key}">
            <label for="field{$key}">{$label}</label>
            <select id="field{$key}" name="{$key}" class="form-control">
            <option value="0">choisir une option</option>
            </select>
            <span class="text-danger" id="error_{$key}"></span>
        </div>
    HTML;
HTML;
    }
    public function checkbox($key,$label)
    {
        return <<<HTML
        <div class="form-group">
        <label for="field{$key}">{$label}</label>
            <input type="checkbox" id="field{$key}" name="$key">
        </div>
    HTML;
    }
    public function radio($key,$label,$value,$classe)
    {
        return <<<HTML
        <div class="form-group">
            <input type="radio" id="field{$key}" class="$classe"  value="$value" name="$key">$label
        </div>
    HTML;
    }
    
    
}