<?php
/*
Plugin Name: Wagering Requirement Calculator
Description: Non.
Version: 1.0
Author: Online Best Group
Author URI: http://casinobest.ca

License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
?>

<?php

wp_enqueue_script('mga-calc-plugin','https://casinobest.ca/wp-content/plugins/mga/js/mga-calc.js', array(),'1.0',true);
wp_enqueue_style( 'mga-calc-style', plugins_url( '/css/mga-calc.css', __FILE__  ), array(), '1.0');
function mgacalcshort() {

    ob_start();
?> 
<section id="wagering">
    <div class="container">
        <div id="calculator" class="box">
            <div class="top_bar">
            <!--<div class="title">Wagering calc.</div>-->
            <span>What do you want to calcul ?</span>
            <div class="select-wager-type">
                <div class="choice active" id="deposit">Wagering on deposit</div>
                <div class="choice" id="free">Free bonus</div>
            </div>
            </div>
            <div class="choice_content active" id="deposit">
                <form  id="calculator_form_deposit">
                    <div class="input-field">
                        <label>Choose Your Currency</label>
                        <div class="select-currency-type">
                            <div class="choice active" attrcurrency="€">€</div>
                            <div class="choice" attrcurrency="$">$</div>
                            <div class="choice" attrcurrency="£">£</div>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="depositAmount">Deposit Amount</label>
                        <input type="number" id="form_depositAmount" class="wagering-field-deposit" name="depositAmout">
                        <span class="indice_type curency">€</span>
                    </div>
                    <div class="input-field">
                        <label for="bonusPerc">Deposit Bonus Percentage</label>
                        <input type="number" id="form_bonusPerc" class="wagering-field-deposit" name="bonusPerc">
                        <span class="indice_type">%</span>
                    </div>
                    <div class="input-field">
                        <label for="bonusLimit">Bonus limit</label>
                        <input type="number" id="form_bonusLimit" class="wagering-field-deposit" name="bonusLimit">
                        <span class="indice_type curency">€</span>
                    </div>
                    <div class="input-field">
                        <label for="wageringPerc">Wagering Requirements</label>
                        <input type="number" id="form_wageringPerc" class="wagering-field-deposit" name="wageringPerc">
                        <span class="indice_type curency">€</span>
                    </div>
                    <div class="input-field">
                        <label for="wageringType">Wagering type</label>
                        <select id="form_wageringType" class="wagering-field-deposit">
                            <option value="bonus" selected="">Bonus</option>
                            <option value="depositBonus">Deposit + Bonus</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="gameContribution">Game Contribution Percentage</label>
                        <input type="number" id="form_gameContribution" class="wagering-field-deposit" value="100" name="gameContribution">
                        <span class="indice_type">%</span>
                    </div>
                </form>
                <div class="result">
                    <div class="bonusMoney">
                        <span> Bonus Money Offered </span>
                        <span class="unite">€</span>
                        <span id="bonusMoney" class="result-number">21</span>
                    </div>
                    <div class="totalPlay">
                        <span> Total Money to Play </span>
                        <span class="unite">€</span>
                        <span id="totalPlay" class="result-number">144</span>
                    </div>
                    <div class="amountToBet">
                        <span> Amount of Money You Need to Bet </span>
                        <span class="unite">€</span>
                        <span id="amountToBet" class="result-number">31</span>
                    </div>
                </div>
            </div>
            <div class="choice_content" id="free">
                <form action="" id="calculator_form_free">
                    <div class="input-field">
                        <label>Choose Your Currency</label>
                        <div class="select-currency-type">
                            <div class="choice active" attrcurrency="€">€</div>
                            <div class="choice" attrcurrency="$">$</div>
                            <div class="choice" attrcurrency="£">£</div>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="freeMoneyAmount">Free Money Amount</label>
                        <input type="number" id="form_freeMoneyAmount" class="wagering-field-free" name="freeMoneyAmount">
                        <span class="indice_type curency">€</span>
                    </div>
                    <div class="input-field">
                        <label for="limitBonusFree">Wagering Requirements</label>
                        <input type="number" id="form_limitBonusFree" class="wagering-field-free" name="limitBonusFree">
                        <span class="indice_type curency">€</span>
                    </div>
                    <div class="input-field">
                        <label for="wageringTypeFree">Wagering type</label>
                        <select id="form_wageringTypeFree" class="wagering-field-free">
                            <option value="bonus" selected="">Bonus</option>
                            <option value="bonusWinnings">Bonus + Winnings</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="estimatedWinning">Estimated winnings</label>
                        <input type="number" id="form_estimatedWinning" class="wagering-field-free" name="estimatedWinning">
                        <span class="indice_type curency">€</span>
                    </div>
                    <div class="input-field">
                        <label for="gameContribPercFree">Game Contribution</label>
                        <input type="number" id="form_gameContribPercFree" class="wagering-field-free" name="gameContribPercFree">
                        <span class="indice_type">%</span>
                    </div>
                </form>
                <div class="result">
                    <div class="amountToBet">
                        <span>Wagering amount </span>
                        <span class="unite">€</span>
                        <span id="amountToBetFree" class="result-number">0</span>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<?php
    return ob_get_clean();
}
add_shortcode("mgacalcshort", "mgacalcshort");