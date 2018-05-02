<?php
class Form
{
    public $path;
    public $file;
    public function __construct($p, $f)
    {
        $this->path = $p;
        $this->file = $f;
    }
   public function frmGenerate($actionURI)
{
    $conf = parse_ini_file($this->path . $this->file . ".ini", true);
           echo "<pre>";
        print_r($conf);
        echo "</pre>";
        $form = "<form method='post' action='$actionURI'>";

    foreach($conf as $c) {
        $form .= "<div>";
        if (isset($c['name'])) {
            $form .= "<label for='" . $c['name'] . "'>";
            $form .= ucfirst($c['name']);
            $form .= "&nbsp;: ";
            $form .= "</label>";
        }
        $form .= "<";
        $form .= $c['tag'];
        $form .= " ";
        $form .= "type='";
        $form .= $c['type'];
        $form .= "' ";
        $form .= isset($c['name']) ? "name='" . $c['name'] . "'" : "";
        $form .= " />";
        $form .= "</div>";
    }
    $form .= "</form>";
    return $form;
}
    public function frmCheck()
    {
    }
}