<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace First\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {


$country = array('India'=>'India','Afganistan'=>'Afghanistan','Albania'=>'Albania','Algeria'=>'Algeria',
            'American Samoa'=>'American Samoa','Andorra'=>'Andorra','Angola'=>'Angola',
            'Anguilla'=>'Anguilla','Antigua and Barbuda'=>'Antigua and Barbuda',
            'Argentina'=>'Argentina','Armenia'=>'Armenia','Aruba'=>'Aruba',
            'Australia'=>'Australia','Austria'=>'Austria','Azerbaijan'=>'Azerbaijan',
            'Bahamas'=>'Bahamas','Bahrain'=>'Bahrain','Bangladesh'=>'Bangladesh',
            'Barbados'=>'Barbados','Belarus'=>'Belarus','Belgium'=>'Belgium','Belize'=>'Belize',
            'Benin'=>'Benin','Bermuda'=>'Bermuda','Bhutan'=>'Bhutan','Bolivia'=>'Bolivia',
            'Bonaire'=>'Bonaire','Bosnia and Herzegovina'=>'Bosnia and Herzegovina',
            'Botswana'=>'Botswana','Brazil'=>'Brazil','British Indian Ocean Ter'=>'British Indian Ocean Ter',
            'Brunei'=>'Brunei','Bulgaria'=>'Bulgaria','Burkina Faso'=>'Burkina Faso','Burundi'=>'Burundi',
            'Cambodia'=>'Cambodia','Cameroon'=>'Cameroon','Canada'=>'Canada','Canary Islands'=>'Canary Islands',
            'Cape Verde'=>'Cape Verde','Cayman Islands'=>'Cayman Islands','Central African Republic'=>'Central African Republic',
            'Chad'=>'Chad','Channel Islands'=>'Channel Islands','Chile'=>'Chile','China'=>'China',
            'Christmas Island'=>'Christmas Island','Cocos Island'=>'Cocos Island','Colombia'=>'Colombia',
            'Comoros'=>'Comoros','Congo'=>'Congo','Cook Islands'=>'Cook Islands','Costa Rica'=>'Costa Rica',
            'Cote DIvoire'=>'Cote DIvoire','Croatia'=>'Croatia','Cuba'=>'Cuba','Curaco'=>'Curacao',
            'Cyprus'=>'Cyprus','Czech Republic'=>'Czech Republic','Denmark'=>'Denmark','Djibouti'=>'Djibouti',
            'Dominica'=>'Dominica','Dominican Republic'=>'Dominican Republic','East Timor'=>'East Timor',
            'Ecuador'=>'Ecuador','Egypt'=>'Egypt','El Salvador'=>'El Salvador','Equatorial Guinea'=>'Equatorial Guinea',
            'Eritrea'=>'Eritrea','Estonia'=>'Estonia','Ethiopia'=>'Ethiopia','Falkland Islands'=>'Falkland Islands',
            'Faroe Islands'=>'Faroe Islands','Fiji'=>'Fiji','Finland'=>'Finland','France'=>'France','French Guiana'=>'French Guiana','French Polynesia'=>'French Polynesia','French Southern Ter'=>'French Southern Ter','Gabon'=>'Gabon','Gambia'=>'Gambia','Georgia'=>'Georgia','Germany'=>'Germany','Ghana'=>'Ghana','Gibraltar'=>'Gibraltar','Great Britain'=>'Great Britain','Greece'=>'Greece','Greenland'=>'Greenland','Grenada'=>'Grenada','Guadeloupe'=>'Guadeloupe','Guam'=>'Guam','Guatemala'=>'Guatemala','Guinea'=>'Guinea','Guyana'=>'Guyana','Haiti'=>'Haiti','Hawaii'=>'Hawaii','Honduras'=>'Honduras','Hong Kong'=>'Hong Kong','Hungary'=>'Hungary','Iceland'=>'Iceland','India'=>'India','Indonesia'=>'Indonesia','Iran'=>'Iran','Iraq'=>'Iraq','Ireland'=>'Ireland','Isle of Man'=>'Isle of Man','Israel'=>'Israel','Italy'=>'Italy','Jamaica'=>'Jamaica','Japan'=>'Japan','Jordan'=>'Jordan','Kazakhstan'=>'Kazakhstan','Kenya'=>'Kenya','Kiribati'=>'Kiribati','Korea North'=>'Korea North','Korea Sout'=>'Korea South','Kuwait'=>'Kuwait','Kyrgyzstan'=>'Kyrgyzstan','Laos'=>'Laos','Latvia'=>'Latvia','Lebanon'=>'Lebanon','Lesotho'=>'Lesotho','Liberia'=>'Liberia','Libya'=>'Libya','Liechtenstein'=>'Liechtenstein','Lithuania'=>'Lithuania','Luxembourg'=>'Luxembourg','Macau'=>'Macau','Macedonia'=>'Macedonia','Madagascar'=>'Madagascar','Malaysia'=>'Malaysia','Malawi'=>'Malawi','Maldives'=>'Maldives','Mali'=>'Mali','Malta'=>'Malta','Marshall Islands'=>'Marshall Islands','Martinique'=>'Martinique','Mauritania'=>'Mauritania','Mauritius'=>'Mauritius','Mayotte'=>'Mayotte','Mexico'=>'Mexico','Midway Islands'=>'Midway Islands','Moldova'=>'Moldova','Monaco'=>'Monaco','Mongolia'=>'Mongolia','Montserrat'=>'Montserrat','Morocco'=>'Morocco','Mozambique'=>'Mozambique','Myanmar'=>'Myanmar','Nambia'=>'Nambia','Nauru'=>'Nauru','Nepal'=>'Nepal','Netherland Antilles'=>'Netherland Antilles','Netherlands'=>'Netherlands (Holland, Europe)','Nevis'=>'Nevis','New Caledonia'=>'New Caledonia','New Zealand'=>'New Zealand','Nicaragua'=>'Nicaragua','Niger'=>'Niger','Nigeria'=>'Nigeria','Niue'=>'Niue','Norfolk Island'=>'Norfolk Island','Norway'=>'Norway','Oman'=>'Oman','Pakistan'=>'Pakistan','Palau Island'=>'Palau Island','Palestine'=>'Palestine','Panama'=>'Panama','Papua New Guinea'=>'Papua New Guinea','Paraguay'=>'Paraguay','Peru'=>'Peru','Phillipines'=>'Philippines','Pitcairn Island'=>'Pitcairn Island','Poland'=>'Poland','Portugal'=>'Portugal','Puerto Rico'=>'Puerto Rico','Qatar'=>'Qatar','Republic of Montenegro'=>'Republic of Montenegro','Republic of Serbia'=>'Republic of Serbia','Reunion'=>'Reunion','Romania'=>'Romania','Russia'=>'Russia','Rwanda'=>'Rwanda','St Barthelemy'=>'St Barthelemy','St Eustatius'=>'St Eustatius','St Helena'=>'St Helena','St Kitts-Nevis'=>'St Kitts-Nevis','St Lucia'=>'St Lucia','St Maarten'=>'St Maarten','St Pierre and Miquelon'=>'St Pierre and Miquelon','St Vincent and Grenadines'=>'St Vincent and Grenadines','Saipan'=>'Saipan','Samoa'=>'Samoa','Samoa American'=>'Samoa American','San Marino'=>'San Marino','Sao Tome and Principe'=>'Sao Tome and Principe','Saudi Arabia'=>'Saudi Arabia','Senegal'=>'Senegal','Serbia'=>'Serbia','Seychelles'=>'Seychelles','Sierra Leone'=>'Sierra Leone','Singapore'=>'Singapore','Slovakia'=>'Slovakia','Slovenia'=>'Slovenia','Solomon Islands'=>'Solomon Islands','Somalia'=>'Somalia','South Africa'=>'South Africa','Spain'=>'Spain','Sri Lanka'=>'Sri Lanka','Sudan'=>'Sudan','Suriname'=>'Suriname','Swaziland'=>'Swaziland','Sweden'=>'Sweden','Switzerland'=>'Switzerland','Syria'=>'Syria','Tahiti'=>'Tahiti','Taiwan'=>'Taiwan','Tajikistan'=>'Tajikistan','Tanzania'=>'Tanzania','Thailand'=>'Thailand','Togo'=>'Togo','Tokelau'=>'Tokelau','Tonga'=>'Tonga','Trinidad and Tobago'=>'Trinidad and Tobago','Tunisia'=>'Tunisia','Turkey'=>'Turkey','Turkmenistan'=>'Turkmenistan','Turks and Caicos Is'=>'Turks and Caicos Is','Tuvalu'=>'Tuvalu','Uganda'=>'Uganda','Ukraine'=>'Ukraine','United Arab Erimates'=>'United Arab Emirates','United Kingdom'=>'United Kingdom','United States of America'=>'United States of America','Uraguay'=>'Uruguay','Uzbekistan'=>'Uzbekistan','Vanuatu'=>'Vanuatu','Vatican City State'=>'Vatican City State','Venezuela'=>'Venezuela','Vietnam'=>'Vietnam','Virgin Islands (Brit)'=>'Virgin Islands (Brit)','Virgin Islands (USA)'=>'Virgin Islands (USA)','Wake Island'=>'Wake Island','Wallis and Futana Is'=>'Wallis and Futana Is','Yemen'=>'Yemen','Zaire'=>'Zaire','Zambia'=>'Zambia','Zimbabwe'=>'Zimbabwe');

        $builder
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('fullname', null, array('label' => 'form.fullname', 'translation_domain' => 'FOSUserBundle'))
		->add('countryCode', null, array('label' => 'form.countryCode', 'translation_domain' => 'FOSUserBundle'))
            ->add('mobileNo', null, array('label' => 'form.mobileNo', 'translation_domain' => 'FOSUserBundle'))
            ->add('country', 'choice', array('choices' =>$country,'choices_as_values' => false))
            
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'registration',
        ));
    }

    // BC for SF < 2.7
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
    }

    public function getName()
    {
        return 'store_user_registration';
    }


}
