<section>
    <div style="width:100%; line-height:200px; text-align: center; font-size: 45px; font-weight:normal; border-bottom: 1px solid #d8d8d8;  vertical-align: center; background-image: url('/img/videos_background.jpg')">
        <?php if( isset( $topMsg)) echo $topMsg; ?> 
    </div>

    <div style="height: 100px; font-size: 23px; text-align: center; padding:5px;"><br />
            <?php if( $this->request->pass[0] == 'linux'){
                      $payment_link = '/services/training_enrollment/?program=Linux_Training&price=99'; 
                      $price_image = '99_dollar.png';
                  }elseif( $this->request->pass[0] == 'aws'){
                      $payment_link = '/services/training_enrollment/?program=Amazon_Web_Services&price=99';
                      $price_image = '99_dollar.png';
                  }elseif( $this->request->pass[0] == 'rhcsa'){
                      $payment_link = '/services/training_enrollment/?program=RHCSA_videos&price=399';
                      $price_image = '399_dollar.png';
                  }
             ?>
            <?= $this->Html->link( 'Access all videos, 1 full year, for only', $payment_link, ['style' => 'font-weight: normal;']); ?>
        <span style="color: red; font-size: 27px; font-weight: bold;">
            <?= $this->Html->link( $this->Html->image( $price_image),$payment_link, array('escape' => false)); ?>
        </span><br />
        <span style="font-size: 11px;">Or select individual videos below</span>
    </div>

    <div style="width: 800px; border-top: 1px solid #d8d8d8;"><br />

    <?php
        for( $i=0; $i<count($video); $i++) {
    ?>

        <table style="border-bottom: 1px solid #d8d8d8;">
            <tr>
                <td style="border: none; width: 500px;"><?= $this->Html->image('/img/gray_triangle.png'); ?> &nbsp; &nbsp; <?= $video[$i]['title']; ?></td>
                <td style="border: none"><?= date('H:i', strtotime( $video[$i]['length'])); ?></td>

                <?php if( isset( $lab_arr) && ( in_array( $video[$i]['labmap_id'], $lab_arr)) ){ ?>
                    <td style="border: none; width: 110px;">Play</td>
                <?php }else{ ?>
                    <td style="border: none; width: 120px;"><?= '$'.number_format( $video[$i]['price'], 0); ?> &nbsp; <?= $this->Html->link( $this->Html->image('buy_button.png'),'/videos/videopayment/'.$video[$i]['lectureresources_id'], array('escape' => false)); ?></td>
                <?php } ?>
            </tr>
        </table>

    <?php }; ?>
    </div>
</section>
