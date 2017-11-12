<?php
if(!empty($posts ))
{
    $count = 1;
    $outputhead = '';
    $outputbody = '';
    $outputtail ='';

    $outputhead .= '<div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Size</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Rack Number</th>
                                <th>Price</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                ';

    foreach ($posts as $post)
    {
        $body = substr(strip_tags($post->body),0,50)."...";
        $show = url('blog/'.$post->slug);
        $outputbody .=  '

                            <tr>
		                        <td>'.$count++.'</td>
		                        <td>'.$post->name.'</td>
		                        <td>'.$post->size.'</td>
		                        <td>'.$post->category.'</td>
                                <td>'.$post->quantity.'</td>
                                <td>'.$post->Rack_num.'</td>
                                <td>'.$post->sale_price.'</td>

                                <td><a href="#" >
                                <span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</a></td>
                            </tr>
                    ';

    }

    $outputtail .= '
                        </tbody>
                    </table>
                </div>';

    echo $outputhead;
    echo $outputbody;
    echo $outputtail;
}

else
{
    echo 'Data Not Found';
}
?>