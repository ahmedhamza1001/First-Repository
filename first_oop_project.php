<?php
   
include "dbh_tree_category.php";
    //begin of the class
    class tree_category extends connection
    { 
            
        public function displaying_tree($parent_id=0,$sub_mark='')
        { 
            $sql="SELECT * from categories where parent_id=$parent_id;";
            $run=$this->connectt()->query($sql);
            $check=$run->num_rows;
            if($check>0)
            { 
                
                while($row=$run->fetch_assoc())
                { 
                    echo '<option style="width:300px;height:40px;border-radius:10px;outline:none;font-size:18px;text-align:center;" class="form-control"
                    value="'.$row['id'].'">'.$sub_mark.$row['name'].'</option>';
                    
                    $this->displaying_tree($row['id'], $sub_mark.'---');
                }
            }
        }// end of the function here *************************************************

        public function inserting_Data()
        { 
            if(isset($_GET['submit']))
            { 
                if(!empty($_GET['field']))
                {
                    if( isset($_GET['category']))
                    { 
                      if($_GET['category']=='none')
                      { 
                        $real_id=0;
                      }else{ 
                        $real_id=$_GET['category'];
                      }
                    }                
                    $name=htmlspecialchars(mysqli_real_escape_string($this->connectt(),$_GET['field']));
                    if(!preg_match("/^[a-zA-z]*$/",$name))
                    { 
                       header("Location: tree_category.php?user=Not");
                       exit();
                    }
                    $sql="insert into categories(parent_id,name) values('$real_id','$name');";
                    $run=$this->connectt()->query($sql);
                    if($run)
                     {
                       header("Location: tree_category.php?user=Done");
                       exit();
                     }else{ 
                        header("Location: tree_category.php?user=Not");
                        exit();
                       }
        
                }
                    
            }else
            { 
              exit();
            }
        
        }//end of the function here*************************************************


    }//end of the class

?>
