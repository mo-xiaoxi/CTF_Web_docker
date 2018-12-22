<?php
/*
 * Emmm - 内容管理系统
 * Copyright (C) 2014 vidar.club
 *-------------------------------
 * 模板操作类(2014-10-15)
 *-------------------------------
*/
if (!defined('EMMMNO')) {
    exit('no!');
}

class Tree
{
    private $result;
    private $tmp;
    private $arr;
    private $already = array();

    /**
     * 构造函数
     *
     * @param array $result 树型数据表结果集
     * @param array $fields 树型数据表字段，array(分类id,父id)
     * @param integer $root 顶级分类的父id
     */
    public function __construct($result, $fields = array('id', 'uid'), $root = 0)
    {
        $this->result = $result;
        $this->fields = $fields;
        $this->root = $root;
        $this->handler();
    }

    /**
     * 树型数据表结果集处理
     */
    private function handler()
    {
        foreach ($this->result as $node) {
            $tmp[$node[$this->fields[1]]][] = $node;
        }
        @krsort($tmp);
        for ($i = count($tmp); $i > 0; $i--) {
            foreach ($tmp as $k => $v) {
                if (!in_array($k, $this->already)) {
                    if (!$this->tmp) {
                        $this->tmp = array($k, $v);
                        $this->already[] = $k;
                        continue;
                    } else {
                        foreach ($v as $key => $value) {
                            if ($value[$this->fields[0]] == $this->tmp[0]) {
                                $tmp[$k][$key]['child'] = $this->tmp[1];
                                $this->tmp = array($k, $tmp[$k]);
                            }
                        }
                    }
                }
            }
            $this->tmp = null;
        }
        $this->tmp = $tmp;
    }

    /**
     * 递归
     */
    private function recur($arr, $id)
    {
        foreach ($arr as $v) {
            if ($v[$this->fields[0]] == $id) {
                $this->arr[] = $v;
                if ($v[$this->fields[1]] != $this->root) $this->recur($arr, $v['uid']);
            }
        }
    }

    /**
     * 菜单 多维数组
     *
     * @param integer $id 分类id
     * @return array 返回分支，默认返回整个树
     */
    public function leaf($id = null)
    {
        $id = ($id == null) ? $this->root : $id;
        return $this->tmp[$id];
    }

    /**
     * 导航 一维数组
     *
     * @param integer $id 分类id
     * @return array 返回单线分类直到顶级分类
     */
    public function navi($id)
    {
        $this->recur($this->result, $id);
        krsort($this->arr);
        return $this->arr;
    }
}

function array2tree($node, $root = 0)
{
    $arr = array();
    foreach ($node as $v) {
        if ($v['uid'] == $root) {
            $v['child'] = array2tree($node, $v['id']);
            $arr[] = $v;
        }
    }
    return $arr;
}

?>
