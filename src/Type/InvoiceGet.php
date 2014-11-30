<?php
/**
 * Collmex Invoice Get Type
 *
 * PHP version 5.3
 *
 * @category  Collmex
 * @package   Type
 * @author    Marcus Jaschen <mail@marcusjaschen.de>
 * @copyright 1999-2013 MTB-News.de
 * @license   http://www.opensource.org/licenses/mit-license MIT License
 * @link      http://www.mtb-news.de/
 */

namespace MarcusJaschen\Collmex\Type;

/**
 * Collmex Invoice Get Type
 *
 * @category Collmex
 * @package  Type
 * @author   Marcus Jaschen <mail@marcusjaschen.de>
 * @license  http://www.opensource.org/licenses/mit-license MIT License
 * @link     http://www.mtb-news.de/
 */
class InvoiceGet extends AbstractType implements TypeInterface
{
    const FORMAT_CSV = 0;
    const FORMAT_ZIP = 1;

    const STATIONARY_INCLUDE = 0;
    const STATIONARY_EXCLUDE = 1;

    /**
     * @var array
     */
    protected $template = array(
        'type_identifier'        => 'INVOICE_GET',
        'invoice_id'             => null,
        'client_id'              => null,
        'customer_id'            => null,
        'invoice_date_from'      => null,
        'invoice_date_to'        => null,
        'sent_only'              => null,
        'format'                 => null,
        'changed_only'           => null,
        'system_name'            => null,
        'created_by_system_only' => null,
        'stationary_exclude'     => null,
    );

    /**
     * Formally validates the type data in $data attribute.
     *
     * @return bool Validation success
     */
    public function validate()
    {
        return true;
    }
}
