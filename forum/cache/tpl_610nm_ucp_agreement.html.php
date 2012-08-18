<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); if ($this->_rootref['S_SHOW_COPPA'] || $this->_rootref['S_REGISTRATION']) {  if ($this->_rootref['S_LANG_OPTIONS']) {  ?>

<script type="text/javascript">
// <![CDATA[
	/**
	* Change language
	*/
	function change_language(lang_iso)
	{
		document.forms['register'].change_lang.value = lang_iso;
		document.forms['register'].submit();
	}

// ]]>
</script>

	<form method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>" id="register">
		<table width="100%" cellspacing="0">
			<tr>
				<td class="gensmall" align="<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_LANGUAGE'])) ? $this->_rootref['L_LANGUAGE'] : ((isset($user->lang['LANGUAGE'])) ? $user->lang['LANGUAGE'] : '{ LANGUAGE }')); ?>: <select name="lang" id="lang" onchange="change_language(this.value); return false;" title="<?php echo ((isset($this->_rootref['L_LANGUAGE'])) ? $this->_rootref['L_LANGUAGE'] : ((isset($user->lang['LANGUAGE'])) ? $user->lang['LANGUAGE'] : '{ LANGUAGE }')); ?>"><?php echo (isset($this->_rootref['S_LANG_OPTIONS'])) ? $this->_rootref['S_LANG_OPTIONS'] : ''; ?></select></td>
			</tr>
		</table>
		<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

	</form>
<?php } ?>

	<form method="post" action="<?php echo (isset($this->_rootref['S_UCP_ACTION'])) ? $this->_rootref['S_UCP_ACTION'] : ''; ?>">

	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th height="25"><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> - <?php echo ((isset($this->_rootref['L_REGISTRATION'])) ? $this->_rootref['L_REGISTRATION'] : ((isset($user->lang['REGISTRATION'])) ? $user->lang['REGISTRATION'] : '{ REGISTRATION }')); ?></th>
	</tr>
	<tr>
		<td class="row1" align="center">
			<table width="90%" cellspacing="2" cellpadding="2" border="0" align="center">
			<tr>
				<?php if ($this->_rootref['S_SHOW_COPPA']) {  ?>

					<td class="gen" align="center"><br /><?php echo ((isset($this->_rootref['L_COPPA_BIRTHDAY'])) ? $this->_rootref['L_COPPA_BIRTHDAY'] : ((isset($user->lang['COPPA_BIRTHDAY'])) ? $user->lang['COPPA_BIRTHDAY'] : '{ COPPA_BIRTHDAY }')); ?><br /><br /><a href="<?php echo (isset($this->_rootref['U_COPPA_NO'])) ? $this->_rootref['U_COPPA_NO'] : ''; ?>"><?php echo ((isset($this->_rootref['L_COPPA_NO'])) ? $this->_rootref['L_COPPA_NO'] : ((isset($user->lang['COPPA_NO'])) ? $user->lang['COPPA_NO'] : '{ COPPA_NO }')); ?></a> :: <a href="<?php echo (isset($this->_rootref['U_COPPA_YES'])) ? $this->_rootref['U_COPPA_YES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_COPPA_YES'])) ? $this->_rootref['L_COPPA_YES'] : ((isset($user->lang['COPPA_YES'])) ? $user->lang['COPPA_YES'] : '{ COPPA_YES }')); ?></a><br /><br /></td>
				<?php } else { ?>

					<td>
<span class="genmed"><br />
  <H2 CLASS="western">
    <em> <strong>
      <span style="font-size: 200%; line-height: normal">
        <div style="text-align:center">Свод правил нашего ресурса</div>
      </span>
    </strong></em><br />
  </H2>
  
  <BLOCKQUOTE>		  
  <DIV ID="post_message_91550" DIR="LTR">
    <div style="text-align:justify; font-size: 120%; line-height: normal">
    <em>
      <span style="margin-left:30px;">
        Администрация имеет все основания для того что бы вмешиваться в хаотическое и 
        не информативное общение пользователей.
      </span><br />
      <span style="margin-left:30px;">
        Информационно-познавательное общение для создания форума нового уровня, 
        для правильного использования интеллектуального потенциала пользователей, 
        для создания информационной базы для будущих поколений пользователей, 
        для формирования интересных и полезных отношений в виртуальном обществе единомышленников.     
      </span><br />
      <span style="margin-left:30px;">
        Виртуальная жизнь, как неотъемлемая часть тех, кто общается в интернете, 
        пытается найти ответы на те вопросы, которые возникают в реальной жизни. 
        Сложные бесповоротные моменты, которые, казалось бы, привели в тупик, 
        смогут найти выход из «лабиринта» лишь в том случае, 
        если каждый из Вас воспримет проблему собеседника как свою собственную и даст совет, 
        основанный на своем опыте.
      </span><br />
      <span style="margin-left:30px;">
        Администрация оставляет за собой право редактировать профили пользователей в случаях если: 
        в них содержится оскорбления участников конференции, бессмысленные nik-name, реклама сторонних ресурсов. 
        Отклонять запрос на регистрацию пользователей с бессмысленными nik-name и 
        nik-name унижающими человеческое достоинство других пользователей, 
        равно как призывающие к межконфессиональной и межрассовой вражде.
      </span><br />
    </div>
    </em>
      
    <H2 CLASS="western">
      <em> <strong>
        <span style="font-size: 200%; line-height: normal">
          <div style="text-align:center">Запрещается:</div>
        </span>
      </strong></em><br />
    </H2>
    <div style="text-align:justify; font-size: 120%; line-height: normal">
      <strong><span style="margin-left:30px;">
        1. Использование форума в противоправных целях.
      </span></strong><br />
      <em><span style="margin-left:30px;">
         Вы обязуетесь не использовать ни одну из опций ресурса 
         для поиска реального контакта в целях противоправной деятельности с другим участником.
      </span></em><br /><br />

      <strong><span style="margin-left:30px;">
        2. Публикация сообщений с данного ресурса на других ресурсах сети.      
      </span></strong><br />
      <em><span style="margin-left:30px;">
         Вы обязуетесь, не выкладывать материалы данного ресурса на других ресурсах сети, 
         без предварительного разрешения автора материала.    
      </span></em><br /><br />

      <strong><span style="margin-left:30px;">
        3. Криминальная или идентифицирующая информация.      
      </span></strong><br />
      <em><span style="margin-left:30px;">
         Вы обязуетесь не размещать в ваших сообщениях информацию, 
         которая содержит тайну или способна нанести ущерб пользователям.    
      </span></em><br /><br />
    
      <strong><span style="margin-left:30px;">
        4. Размещение спама и флуда.      
      </span></strong><br />
      <em><span style="margin-left:30px;">
         Вы обязуетесь не размещать сообщения содержащие спам и флуд. 
         Реклама сторонних ресурсов, только по разрешению администраторов форума.    
      </span></em><br /><br />
    
      <strong><span style="margin-left:30px;">
        5. Сообщения, содержащие изображения сексуального характера.      
      </span></strong><br />
      <em><span style="margin-left:30px;">
         Вы обязуетесь не размещать в сообщениях изображения явные по своему 
         сексуальному характеру и изображения аксессуаров секс-шопов.    
      </span></em><br /><br />
    
      <strong><span style="margin-left:30px;">
        6. Размещать в сообщениях эротические или порнографические изображения детей.      
      </span></strong><br />
      <em><span style="margin-left:30px;">
         Вы обязуетесь не предоставлять ссылок на адреса веб-сайтов, 
         которые содержат изображения, какими бы то ни было средствами демонстрирующее ребенка, 
         совершающего реальные или смоделированные откровенно сексуальные действия, 
         или любое изображение половых органов ребенка, главным образом в сексуальных целях, 
         не приемлемый согласно существующим правилам форума, так же, 
         как и осуществлять запросы на подобные материалы в сети. 
         Вы также обязуетесь не размещать никаких эротических или порнографических изображений детей, 
         которые находятся в сексуально-провокационных позах, или позах, 
         где не просматривается никакого естественного на это контекста. 
         <strong>За нарушение данного правила ваша учётная запись будет немедленно 
         удаляться без предварительного предупреждения.</strong>
      </span></em><br /><br />
    
      <strong><span style="margin-left:30px;">
        7. Размещать в сообщения, содержащие унизительные изображения.      
      </span></strong><br />
      <em><span style="margin-left:30px;">
         Вы обязуетесь не размещать в своих сообщениях изображения, 
         показывающие человеческие злодеяния, скотства или садомазохизма.    
      </span></em><br /><br />
      
      <strong><span style="margin-left:30px;">
        8. Размещать оскорбительные и содержащие угрозы сообщения      
      </span></strong><br />
      <em><span style="margin-left:30px;">
        Вы обязуетесь не оскорблять и не угрожать кому-либо из участников конференции, 
        размещать призывы к межконфессиональной и межнациональной розни, провоцировать склоки и споры.    
      </span></em><br /><br />
      
      <strong><span style="margin-left:30px;">
        9. Размещение сообщений содержащих сексуально-непристойные описания.      
      </span></strong><br />
      <em><span style="margin-left:30px;">
        Вы обязуетесь не постить сексуальные описания, выдержанные в порнографическом тоне и стиле. 
        Мы ожидаем, что участники будут придерживаться беспристрастного тона в общении и общепринятому такту.     
      </span></em><br /><br />

      <strong><span style="margin-left:30px;">
        10.Размещение сообщений нарушающих авторские права.      
      </span></strong><br />
      <em><span style="margin-left:30px;">
        Администрация обязуется удалить любое сообщение нарушающее авторские права, 
        по первому требованию автора. Если вы размещаете какие-либо материалы, 
        из сети старайтесь предоставлять ссылку на первоисточник.    
      </span></em><br /><br />
    </div>
     
    <br /><br /> 
    <div style="text-align:center; font-size: 120%; line-height: normal">
      <em><strong>
        За нарушение данных правил будут выноситься предупреждения и другие меры взыскания 
        в соответствии с правилами модерирования.
      </strong></em>
    </div>
    <br />
    <div style="text-align:center">При возникновении проблем вы можете обратится к администрации форума:
      <a href="mailto:support@karlson-bl.in">support@karlson-bl.in</a>
    </div>
  </div>
</BLOCKQUOTE>  
</span>

  <div align="center">
    <input class="btnlite" type="submit" id="agreed" name="agreed" value="<?php echo ((isset($this->_rootref['L_AGREE'])) ? $this->_rootref['L_AGREE'] : ((isset($user->lang['AGREE'])) ? $user->lang['AGREE'] : '{ AGREE }')); ?>" /><br /><br />
    <input class="btnlite" type="submit" name="not_agreed" value="<?php echo ((isset($this->_rootref['L_NOT_AGREE'])) ? $this->_rootref['L_NOT_AGREE'] : ((isset($user->lang['NOT_AGREE'])) ? $user->lang['NOT_AGREE'] : '{ NOT_AGREE }')); ?>" />
  </div>
  </td>
				<?php } ?>

			</tr>
			</table>
		</td>
	</tr>
	</table>
	<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>

	<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>

	</form>

<?php } else if ($this->_rootref['S_AGREEMENT']) {  ?>


	<table class="tablebg" width="100%" cellspacing="1">
	<tr>
		<th height="25"><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> - <?php echo (isset($this->_rootref['AGREEMENT_TITLE'])) ? $this->_rootref['AGREEMENT_TITLE'] : ''; ?></th>
	</tr>
	<tr>
		<td class="row1" align="center">
			<table width="90%" cellspacing="2" cellpadding="2" border="0" align="center">
			<tr>
				<td>
					<span class="genmed"><br /><?php echo (isset($this->_rootref['AGREEMENT_TEXT'])) ? $this->_rootref['AGREEMENT_TEXT'] : ''; ?><br /><br /></span>
					<div align="center">
						<a href="<?php echo (isset($this->_rootref['U_BACK'])) ? $this->_rootref['U_BACK'] : ''; ?>"><?php echo ((isset($this->_rootref['L_BACK'])) ? $this->_rootref['L_BACK'] : ((isset($user->lang['BACK'])) ? $user->lang['BACK'] : '{ BACK }')); ?></a>
					</div>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>

<?php } $this->_tpl_include('overall_footer.html'); ?>