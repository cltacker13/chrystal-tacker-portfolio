<?php

class htmlWrap{
    
    public function bodyTitle (string $titleText): string {
        return '<div class="body-title">'.$titleText.'</div>';
    }
    
    //will discontinue. Not practical, as is.
    public function content ($contentBox): string {
        return '<div class="content">'.$contentBox.'</div>';
    }
    
    public function contentTitle (string $contentTitle): string {
        return '<div class="content-title">'.$contentTitle.'</div>';
    }
    
    //may discontinue
    public function contentImage ($contentImageLink, $contentImageName): string {
        return '<div class="content-image"><img src="'
                .$contentImageLink
                .'" alt="'
                .$contentImageName
                .'"></div>';
    }
    
    public function imageGallery ($imageLink, $imageName, $imageDescription): string {
        return '<div class="gallery"> <a target="_blank" href="'
                . $imageLink
                . '"><img src="'
                . $imageLink
                .'" alt="'
                . $imageName
                .'"> </a> <div class="image-desc">'
                . $imageDescription
                . '</div></div>';
    }
    
    public function pdfGallery ($pdfLink, $imageLink, $imageName, $imageDescription): string {
        return '<div class="gallery"> <a target="_blank" href="'
                . $pdfLink
                . '"><img src="'
                . $imageLink
                .'" alt="'
                . $imageName
                .'"> </a> <div class="image-desc">'
                . $imageDescription
                . '</div></div>';
    }
    
    public function contentText (string $contentText): string {
        return '<div class="content-text">'.$contentText.'</div>';
    }
    
}
