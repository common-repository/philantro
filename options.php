<?php
    $OID = get_option('OID');
    $OID = preg_replace('/\D/', '', get_option('OID'));
    if(!$OID): $OID = '000000000'; endif;
?>
<div id="no-EIN-notice" <?php if($OID== '' || $OID == '000000000'):?>style="display:block;"<?php endif; ?>>
    Have an existing Philantro&reg; account? Enter and save your Organization's ID below.
</div>
<div id="left-panel" class="relative-class">
    <div class="plugin-header">
        <a href="https://www.philantro.com" id="philantro-logo" target="_blank">
            <svg id="philantro-logo-svg" width="190" viewBox="0 0 787.1 183.8">
                <defs>
                    <path id="logo" d="M424.9 144.1h-25.5V39.7h25.8L424.9 144.1zM386.4 67.7c-4.9-5.5-10.9-8.2-18.1-8.2 -7.2 0-13.3 2.7-18.2 8.2 -4.9 5.5-7.4 13.5-7.4 23.8 0 10.3 2.4 18.3 7.4 23.8 4.9 5.5 11 8.2 18.2 8.2 7.2 0 13.2-2.7 18.1-8.2 4.9-5.5 7.3-13.5 7.3-24C393.7 81.1 391.3 73.2 386.4 67.7zM406.8 130.5c-10.1 10.4-23 15.6-38.5 15.6 -9.6 0-18.6-2.2-27.4-6.5 -8.7-4.3-15.3-10.6-19.8-19 -4.5-8.3-6.8-18.5-6.8-30.5 0-9.2 2.3-18.1 6.8-26.7 4.5-8.6 10.9-15.2 19.2-19.6 8.3-4.6 17.5-6.8 27.8-6.8 15.8 0 28.8 5.1 38.8 15.4 10.1 10.3 15.1 23.2 15.1 38.9C422.1 107 417 120.1 406.8 130.5zM72.3 67.7c-4.9-5.5-10.9-8.2-18.1-8.2 -7.2 0-13.3 2.7-18.2 8.2 -5 5.5-7.4 13.5-7.4 23.8 0 10.3 2.5 18.3 7.4 23.8 4.9 5.5 11 8.2 18.2 8.2 7.2 0 13.2-2.7 18.1-8.2 4.9-5.5 7.3-13.5 7.3-24C79.6 81.1 77.1 73.2 72.3 67.7zM92.7 130.5c-10.2 10.4-23 15.6-38.5 15.6 -9.6 0-18.7-2.2-27.4-6.5 -8.7-4.3-15.3-10.6-19.8-19 -4.5-8.3-6.8-18.5-6.8-30.5C0.2 80.9 2.5 72 7 63.4c4.5-8.6 10.9-15.2 19.2-19.6C34.5 39.2 43.8 37 54 37c15.8 0 28.7 5.1 38.8 15.4C102.9 62.6 108 75.5 108 91.2 108 107 102.9 120.1 92.7 130.5zM750.3 68.1c-4.9-5.5-10.9-8.2-18.1-8.2 -7.2 0-13.2 2.7-18.2 8.2 -4.9 5.5-7.4 13.4-7.4 23.8 0 10.4 2.4 18.3 7.4 23.8 5 5.5 11 8.3 18.2 8.3 7.2 0 13.2-2.8 18.1-8.3 4.9-5.5 7.4-13.5 7.4-24C757.7 81.5 755.2 73.6 750.3 68.1zM770.7 130.9c-10.1 10.4-22.9 15.6-38.5 15.6 -9.6 0-18.7-2.2-27.4-6.5 -8.7-4.3-15.3-10.7-19.8-19 -4.5-8.3-6.8-18.5-6.8-30.5 0-9.2 2.3-18.1 6.8-26.7 4.5-8.6 10.9-15.1 19.2-19.6 8.3-4.5 17.5-6.8 27.8-6.8 15.8 0 28.8 5.2 38.8 15.4C781 63 786.1 76 786.1 91.7 786.1 107.5 781 120.5 770.7 130.9zM672.3 66.7c0 0-8.9-4.5-12.9-4.5 -3.9 0-7.1 1.1-9.9 3.2 -2.7 2.1-4.8 6-6.3 11.5 -1.6 5.6-2.3 17.2-2.3 35v32.2h-27.6V39.7h25.6v14.8c4.4-7 8.4-11.6 11.9-13.9 3.5-2.2 7.5-3.4 11.9-3.4 6.3 0 16.1 4.9 21.9 8.3L672.3 66.7zM581.1 61.7v82.4l-27.8 0V61.7h-16.9v-22h16.9V13.6l27.8 0v26.2H600v22H581.1zM502 144.2V90.9c0-11.3-0.6-18.6-1.8-21.9 -1.2-3.3-3.1-5.9-5.8-7.7 -2.7-1.9-5.9-2.8-9.6-2.8 -4.8 0-9.1 1.3-12.9 3.9 -3.8 2.7-6.4 6.2-7.8 10.5 -1.4 4.3-2.1 12.3-2.1 24v47.3h-27.7V39.7h25.7v15.3c9.1-11.8 20.6-17.7 34.4-17.7 6.1 0 11.7 1.1 16.7 3.3 5.1 2.2 8.9 5 11.4 8.4 2.6 3.4 4.4 7.3 5.4 11.6 1 4.3 1.5 10.5 1.5 18.6v64.9H502zM277.5 144.2V0h27.6v144.2H277.5zM231.3 0H259v25.6h-27.6V0zM231.3 144.2V39.7H259v104.4H231.3zM186.2 144.2V89c0-11-0.5-17.9-1.6-20.8 -1-3-2.9-5.3-5.6-7 -2.6-1.8-6-2.6-10-2.6 -4.6 0-8.6 1.1-12.3 3.3 -3.6 2.2-6.2 5.6-7.9 10.1 -1.7 4.5-2.5 11.1-2.5 19.9v52.3h-27.6V0h27.6v53c8.9-10.4 19.6-15.7 31.9-15.7 6.4 0 12.1 1.2 17.2 3.5 5.1 2.4 8.9 5.4 11.5 9.1 2.6 3.6 4.3 7.8 5.3 12.2 0.9 4.4 1.4 11.4 1.4 20.7v61.3H186.2zM25.9 183.9H0V39.7h25.9L25.9 183.9z">
                    </path>
                </defs>
                <use xlink:href="#logo" overflow="visible">Philantro</use>
            </svg>
        </a>
        <span class="logo-reg"></span>
    </div>
    <div id="first-panel">

        <div class="first-pitch" <?php if($OID== '' || $OID == '000000000'):?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>
            <h1 style="line-height: 1.3em;">UK, US and Canadian Charities Only</h1>
            <p class="muted">This is the official plugin for the Philantro&reg; platform. If you are a nonprofit who've stumbled upon this plugin but lack a Philantro&reg; account, learn more. We believe you've stumbled upon something great.</p>
            <a class="register-button" href="https://www.philantro.com" target="_blank">Learn About Philantro&reg;</a>

        </div>
        <?php if($_GET['settings-updated']):?>
            <div id="philantro-notification">Your OID has been updated successfully.</div>
        <?php endif; ?>
        <form method="post" action="options.php" style="padding-top:10px; padding-bottom:10px;">
            <?php wp_nonce_field('update-options'); ?>
            <?php settings_fields('philantro'); ?>

            <table cellpadding="0" cellspacing="0" border="0">

                <tr valign="top">
                    <td>
                        <b>Organization's ID:</b>
                        <p class="mild">Found on your Philantro&reg; dashboard.</p>
                    </td>
                    <td style="width:20px;">&nbsp;</td>
                    <td style="width:140px;"><input class="large-input" type="text" max-length="9" name="OID" value="<?php echo $OID ?>"/></td>
                    <td style="width:20px;">&nbsp;</td>
                    <td style="width:100px;">
                        <input type="submit" class="button-primary-philantro" value="<?php _e('Save') ?>" />
                    </td>
                </tr>

            </table>

            <input type="hidden" name="action" value="update" />


        </form>

        <hr/>
        <b>Standard Donate Button Shortcode</b>
        <p class="muted">
            This is the most popular implementation of the integration. Place this shortcode where you would like the standardized donation button to appear.
            You can also customize your button's text and background color.
        </p>

        <code>
            [donate label="<span class="highlighted">Donate Now</span>" color="<span class="highlighted">#0073aa</span>"]
        </code>

        <div class="example">
            <a href="#_givealways" class="philantro-btn" data-color="#0073aa">Donate Now</a>
        </div>

        <hr/>
        <b>Custom Donate Button</b>
        <p class="muted">
            For design-sensitive organizations, you can design a custom donation button to match your branding and simply link it to your donation form. Use the following link.</p>

        <code>
            <?php echo get_site_url(); ?>#_givealways
        </code>

        <p class="muted">Philantro&reg; also allows you to manipulate the donation form via dynamic linking - for example, pre-fill the donation amount with $200 etc. </p>

        <code>
            <?php echo get_site_url(); ?>#_givealways|200
        </code>

        <div class="example">
            <a href="#_givealways">Basic Donate Link</a><br/>
            <a href="#_givealways|200">Click me with $200 Pre-Entered</a><br/>
        </div>
        <hr/>

        <b>Donor Self-Service</b>

        <p class="muted">Philantro&reg; also empowers your organizations with Donor Self-Service. This gives your donors the ability to check their contribution history, manage their recurring donation, peer-fundraiser and more directly on your website.</p>

        <code>
            <?php echo get_site_url(); ?>#_donorstandard
        </code>



        <div class="example">
            <a href="#_donorstandard">Donor Self-Service</a>
        </div>

        <hr/>
        <b>Fully Embedded Donation Form Shortcode</b>
        <p class="muted">
            This implementation is different in that it embeds the donation form into the page itself. If you want to have the donation form to live on a specific page, this implementation is the one for you.
        </p>

        <code>
            [donateform]
        </code>



        <hr/>
        <b>Fundraiser Shortcode</b>
        <p class="muted">This will create a fundraising campaign widget that tracks the total amount raised, your fundraising goal and allow donors to share by Facebook and Twitter. You will retrieve your campaign ID from your Philantro&reg; dashboard.</p>

        <code>
            [fundraise id="<span class="highlighted">campaign_ID</span>"]
        </code>


        <hr/>
        <b>Donation Bar Shortcode</b>
        <p class="muted">This will create a donation bar widget that allows your donors to select from up-to 4 suggested donation amounts or an open-ended amount. You can also designate a specific campaign, modify the button text and area headline. If you want to designate a specific campaign, access your Campaign IDs via your Philantro&reg; dashboard.</p>
        <br/><br/>
        <p class="muted">Campaign ID is optional</p>
        <p class="muted">Add up-to four suggested amounts, separated by a hyphen. i.e. (10-250-1,000-2,000).</p>

        <code>
            [donatebar button="<span class="highlighted">Donate</span>" amounts="<span class="highlighted">number</span>" id="<span class="highlighted">campaign_ID</span>"]
        </code>

        <br/>
        <br/>
        <p class="muted">For example:</p>
        <code>
            [donatebar button="Give" amounts="10-20-50-100"]
        </code>

        <hr/>
        <table cellpadding="0" cellspacing="0" border="0" style="width:100%;">
            <tr>
                <td>
                    <p style="color:#999; margin:0; font-size:13px; padding:0;">Access your nonprofit dashboard anytime at <a style="color:#4380A5;" href="https://www.philantro.com/sign-up.php">Philantro.com</a></p>
                </td>
            </tr>
        </table>
    </div>
    <div id="second-panel">
        <div>
            <h1 style="line-height: 1.3em;">Block Editor<br/>Walk-Through</h1>
            <p class="muted">You can also find Philantro&reg; Donation Buttons, Forms, Event Ticketing and Fundraiser Widgets via your Page / Post editor.</p>
            <a style="text-decoration: none;" target="_top" href="https://www.youtube.com/watch?v=4P8cFytfJGQ">Walk-Through Video</a>

            <hr/>
            <h1 style="line-height: 1.3em;">We're always an email away.</h1>
            <p class="muted">We strive to respond amazingly fast, but please be aware of our time zone differences, the occasional queue. We're fairly responsive between the hours of 8AM - 5PM Central Standard Time, Monday - Friday.</p>
            <a style="text-decoration: none;" href="mailto:support@philantro.com" target="_blank">support@philantro.com</a>
            <hr/>
            <h1 style="line-height: 1.3em;">We're Social</h1>
            <p class="muted">We're slowly but surely building our social media presence and we would love a follow. Please consider joining us on Twitter, Instagram and we will surely follow back!</p>
            <a style="text-decoration: none;" href="https://twitter.com/teamphilantro" title="Twitter" target="_blank">@TeamPhilantro</a>
            <a style="text-decoration: none;" href="https://instagram.com/philantro" title="Instagram" target="_blank">@Philantro</a>
        </div>
    </div>

</div>

