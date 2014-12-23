<?php
namespace luya\ngrest\plugins;

use \luya\ngrest\PluginAbstract;

class Textarea extends PluginAbstract
{
    public $rows = null;
    public $cols = null;
    
    public function __construct($rows = 5, $cols = 40)
    {
        $this->rows = $rows;
        $this->cols = $cols;
    }
    
    public function renderList($doc)
    {
        $elmn = $doc->createElement("span", "{{item.".$this->config['name']."}}");
        $doc->appendChild($elmn);
        return $doc;
    }
    
    public function renderCreate($doc)
    {
        $elmn = $doc->createElement("textarea");
        $elmn->setAttribute("name", $this->name);
        $elmn->setAttribute("placeholder", $this->alias);
        $elmn->setAttribute("rows", $this->rows);
        $elmn->setAttribute("cols", $this->cols);
        $elmn->setAttribute("id", $this->id);
        $elmn->setIdAttribute("id", true);
        $elmn->setAttribute("ng-model", $this->config['ngModel']);
        $doc->appendChild($elmn);
        return $doc;
    }

    public function renderUpdate($doc)
    {
        $elmn = $doc->createElement("textarea");
        $elmn->setAttribute("name", $this->name);
        $elmn->setAttribute("placeholder", $this->alias);
        $elmn->setAttribute("rows", $this->rows);
        $elmn->setAttribute("cols", $this->cols);
        $elmn->setAttribute("id", $this->id);
        $elmn->setIdAttribute("id", true);
        $elmn->setAttribute("ng-model", $this->config['ngModel']);
        $doc->appendChild($elmn);
        return $doc;
    }
}