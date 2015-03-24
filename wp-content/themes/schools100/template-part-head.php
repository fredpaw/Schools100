<?php global $dm_settings; ?>

<div class="container dmbs-container">

<div id="floatTools" class="float0831">
    <div class="floatL">
        <a id="aFloatTools_Show" class="btnOpen" title="查看在线客服"
           onclick="javascript:jQuery('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ jQuery('#divFloatToolsView').show();kf_setCookie('RightFloatShown', 0, '', '/', 'www.schools100.com'); });jQuery('#aFloatTools_Show').attr('style','display:none');jQuery('#aFloatTools_Hide').attr('style','display:block');"
           href="javascript:void(0);">展开</a>
        <a id="aFloatTools_Hide" class="btnCtn" title ="关闭在线客服"
           onclick="javascript:jQuery('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ jQuery('#divFloatToolsView').hide();kf_setCookie('RightFloatShown', 1, '', '/', 'www.schools100.com'); });jQuery('#aFloatTools_Show').attr('style','display:block');jQuery('#aFloatTools_Hide').attr('style','display:none');"
           href="javascript:void(0);">收缩</A>
    </div>
    <div id="divFloatToolsView" class="floatR">
        <div class="tp"></div>
        <div class="cn">
            <ul>
                <li class="top"><h3 class="titZx">QQ咨询</h3></li>
                <li><span class="icoZx">悉尼办公室</span></li>
                <li><a href="tel:0292677239" class="icoTl">(02) 9267 7239</a></li>
                <li class="qq_pc hidden"><a target="blank" href="tencent://message/?uin=1955462185&amp;Site=&amp;Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=1:1955462185:4" alt="蔡老师（Bianca）">蔡老师(Bianca)</a></li>
                <li class="qq_mobile"><a target="blank" href="mqqwpa://im/chat?chat_type=wpa&uin=1955462185&version=1"><img border="0" src="http://wpa.qq.com/pa?p=1:1955462185:4" alt="蔡老师（Bianca）">蔡老师(Bianca)</a></li>
                <li><span class="icoZx">墨尔本办公室</span></li>
                <li><a href="tel:0396146026" class="icoTl">(03) 9614 6026</a></li>
                <li class="qq_pc hidden"><a target="blank" href="tencent://message/?uin=2301396725&amp;Site=&amp;Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=1:2301396725:4" alt="赵老师（Katie）">	赵老师(Katie)</a></li>
                <li class="qq_mobile"><a target="blank" href="mqqwpa://im/chat?chat_type=wpa&uin=2301396725&version=1"><img border="0" src="http://wpa.qq.com/pa?p=1:2301396725:4" alt="赵老师（Katie）">	赵老师(Katie)</a></li>
                <li><span class="icoZx">北京办公室</span></li>
                <li><a href="tel:01059003028" class="icoTl">010-59003028</a></li>
                <li class="qq_pc hidden"><a target="blank" href="tencent://message/?uin=2073876220&amp;Site=&amp;Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=1:2073876220:4" alt="许老师(Daisy)">许老师(Daisy)</a></li>
                <li class="qq_mobile"><a target="blank" href="mqqwpa://im/chat?chat_type=wpa&uin=2073876220&version=1"><img border="0" src="http://wpa.qq.com/pa?p=1:2073876220:4" alt="许老师(Daisy)">许老师(Daisy)</a></li>
                <li class="qq_pc hidden"><a target="blank" href="tencent://message/?uin=2106914517&amp;Site=&amp;Menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=1:2106914517:4" alt="百分网老师">百分网老师</a></li>
                <li class="qq_mobile"><a target="blank" href="mqqwpa://im/chat?chat_type=wpa&uin=2106914517&version=1"><img border="0" src="http://wpa.qq.com/pa?p=1:2106914517:4" alt="百分网老师">百分网老师</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
<div class="col-sm-3">

<?php if ($dm_settings['show_header'] != 0) : ?>
    <div class="dmbs-header row">
        <?php if ( get_header_image() != '' || get_header_textcolor() != 'blank') : ?>

        <?php if ( get_header_image() != '' ) : ?>
            <div class="col-sm-12 hidden-xs dmbs-header-img text-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
            </div>
        <?php endif; ?>

        <div class="hidden-lg hidden-md hidden-sm col-xs-12 dmbs-header-text">
            <?php if ( get_header_textcolor() != 'blank' ) : ?>
                <h1><a class="custom-header-text-color" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h4 class="custom-header-text-color"><?php bloginfo( 'description' ); ?></h4>
            <?php endif; ?>
            <?php else : ?>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <h4><?php bloginfo( 'description' ); ?></h4>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>