<?php

namespace App\Filter;

use App\DTO\PromotionEnquiryInterface;
use App\Filter\PromotionsFilterInterface;

class LowestPriceFilter implements PromotionsFilterInterface
{
    public function apply(PromotionEnquiryInterface $enquiry): PromotionEnquiryInterface
    {
        $enquiry->setPromotionId(3);
        $enquiry->setPrice(100);
        $enquiry->setDiscountedPrice(50);
        $enquiry->setPromotionName('Black Friday half price sale');

        return $enquiry;
    }
}
