<?php

namespace Sun\IconDirective;

class Icon
{
    /**
     * Get html markup from the given expression.
     *
     * @param string $expression
     *
     * @return mixed
     */
    public function getHtmlMarkUp($expression)
    {
        list($fontClassName, $extraClassesName) = $this->getIconAndExtraClassesName($expression);

        return str_replace(
            '$classesName',
            $this->getRequiredClassesName($fontClassName, $extraClassesName),
            file_get_contents($this->getIconTemplatePath())
        );
    }

    /**
     * Get icon and extra classes name from the given expression.
     *
     * @param string $expression
     *
     * @return array
     */
    protected function getIconAndExtraClassesName($expression)
    {
        $iconAndExtraClasses = array_map(function($name) {
            return preg_replace("/ ?'?/", '', $name);
        }, explode(",", $expression));

        return [
            $this->getIconClassName($iconAndExtraClasses),
            $this->getExtraClassesName($iconAndExtraClasses)
        ];
    }

    /**
     * Get icon class name from the given array.
     *
     * @param array $iconAndExtraClasses
     *
     * @return array
     */
    protected function getIconClassName(array &$iconAndExtraClasses)
    {
        return "fa-" . array_shift($iconAndExtraClasses);
    }

    /**
     * Get all extra classes name from the given array.
     *
     * @param array $iconAndExtraClasses
     *
     * @return string
     */
    protected function getExtraClassesName(array $iconAndExtraClasses)
    {
        return implode(" ", $iconAndExtraClasses);
    }

    /**
     * Get required classes name from the given
     * font class and extra classes name.
     *
     * @param $fontClassName
     * @param $extraClassesName
     *
     * @return string
     */
    protected function getRequiredClassesName($fontClassName, $extraClassesName)
    {
        if(empty($extraClassesName)) {
            return $fontClassName;
        } else {
            return "{$fontClassName} {$extraClassesName}";
        }
    }

    /**
     * Get icon template path.
     *
     * @return string
     */
    protected function getIconTemplatePath()
    {
        return __DIR__ . '/../template/icon.template';
    }
}