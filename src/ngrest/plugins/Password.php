<?php
namespace luya\ngrest\plugins;

use \luya\ngrest\PluginAbstract;

class Password extends PluginAbstract
{
    public function renderList($doc)
    {
        $elmn = $doc->createElement("span", "{{item.".$this->config['name']."}}");
        $doc->appendChild($elmn);
        return $doc;
    }
    
    public function renderCreate($doc)
    {
        $elmn = $doc->createElement("input");
        $elmn->setAttribute("type", "password");
        $elmn->setAttribute("name", $this->name);
        $elmn->setAttribute("placeholder", $this->alias);
        $elmn->setAttribute("id", $this->id);
        $elmn->setIdAttribute("id", true);
        $elmn->setAttribute("ng-model", $this->config['ngModel']);
        $doc->appendChild($elmn);
        return $doc;
    }

    public function renderUpdate($doc)
    {
        $elmn = $doc->createElement("input");
        $elmn->setAttribute("type", "password");
        $elmn->setAttribute("name", $this->name);
        $elmn->setAttribute("placeholder", $this->alias);
        $elmn->setAttribute("id", $this->id);
        $elmn->setIdAttribute("id", true);
        $elmn->setAttribute("ng-model", $this->config['ngModel']);
        $doc->appendChild($elmn);
        return $doc;
    }
}