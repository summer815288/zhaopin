<?php
namespace app\models;

use Yii;
class Page{
    public function page($count,$p=1,$limit=5){
        $pages=ceil($count/$limit);//总页数
        $last=$p-1 < 1 ? 1 : $p-1;//上一页
        $next=$p+1 > $pages ? $pages : $p+1;//下一页
        $last_two=$p-2 < 1 ? 1 : $p-2;//上两页
        $next_two=$last_two+4 > $pages ? $pages : $last_two+4;//下两页
        //拼接字符串
        $str='';
        $str.='<a href="javascript:page('.$last.')">上一页</a>&nbsp;&nbsp;&nbsp;';
        for($i=$last_two;$i<=$next_two;$i++){
            if($p==$i){
                $str.='<span>'.$i.'</span>';
            }else{
                $str.='<a href="javascript:page('.$i.')">'.$i.'</a>';
            }
        }
        $str.='&nbsp;&nbsp;&nbsp;<a href="javascript:page('.$next.')">下一页</a>';
        $str.="&nbsp;&nbsp;&nbsp;<span style='color:red'>当前第</span>".$p."<span style='color:red'>页</span>/<span style='color:orange'>一共</span>".$pages."<span style='color:orange'>页</span>";

        //返回一个字符串
        return $str;
    }
}



?>