<?php 
    class Video extends AppModel{
 //       var $belongsTo= array( 'labprofile' => array( 'classname' => 'Labprofile', 
 //       										 'foreignKey' => false,
 //												 'conditions'=> array('Lectureresource.labprofile_id = labprofile.id')         		
 //       		        		            	),
 //							'user' => array( 'classname' => 'User', 
 //       										 'foreignKey' => false,
 //												 'conditions'=> array('user.id = labprofile.user_id')     		
 //       									),
 //							'Lecturenotes' => array( 'classname' => 'Lecturenotes', 
 //       										 'foreignKey' => false,
 //												 'conditions'=> array('Lecturenotes.resource_id = Lectureresource.id')     		
 //       									)
 //       		);
		
        var $belongsTo = array( 'Lectureresources' => array( 'classname' => 'Lectureresources',
                                             'conditions' => array('Lectureresources.id = Video.Lectureresources_id')
                           ));

        public function getVideoDetails( $LOW_LIMIT, $HIGH_LIMIT){
          $video_details = $this->find('all',[ 
                                                'conditions' =>[
                                                                'Lectureresources.labprofile_id >' => $LOW_LIMIT,
                                                                'Lectureresources.labprofile_id <' => $HIGH_LIMIT
                                                               ]
                                       ]);
            
            $i = 0; 

            foreach( $video_details as $detail){
                $video[$i]['title'] = $detail['Video']['title'];
                $video[$i]['length'] = $detail['Video']['length'];
                $video[$i]['price'] = $detail['Video']['price'];
                $video[$i]['labmap_id'] = $detail['Lectureresources']['labprofile_id'];
                $video[$i++]['lectureresources_id'] = $detail['Video']['lectureresources_id'];
            }

            return $video;
        }

    } 
    
?>
