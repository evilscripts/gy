<p>{l s='Thank you for using ' mod='agilepaypal'} <span class="bold">{$shop_name}</span> {l s='. We have received your order.' mod='agilepaypal'}
	<br /><br />
	{l s='You have chosen the PayPal payment method.' mod='agilepaypal'}
	<br /><br /><span class="bold">{l s='You will receive an "Order Confirmation" email soon. If this is your first order, you will also received a "Welcome" email.' mod='agilepaypal'}</span>

	{if $id_subcart>0}
		<br><br>
		<a href="{$base_dir_ssl}order.php?step=3">{l s='If you are ordering products from multiple sellers and still have unpaid items, please click here to continue to pay for the remainder of your items.' mod='agilepaypal'}</a>
	{/if}

	<br /><br /><span class="bold">{l s='Processing your Paypal payment may take a few moments, please be patient.' mod='agilepaypal'}</span>
	<br /><br />{l s='For any questions or for further information, please contact our' mod='agilepaypal'} <a href="mailto:contact@guiding-you.co">{l s='customer support' mod='agilepaypal'}</a>.
</p>
<p>
{$HOOK_ORDER_CONFIRMATION}
</p>
