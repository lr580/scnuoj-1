<div class="alert alert-light"><i class="fas fa-fw fa-info-circle"></i> 本页面已被隐藏，如果你不是 SCNUOJ 开发组或出题人，本页面可能对你帮助不大。
</div>


<h3>关于线上赛与线下赛的区别</h3>
<p>　　线下赛是为了举办现场赛而设立的一个场景。线上赛与线下赛的区别在于：</p>
<ol>
    <li>线下赛在比赛页面会有代码打印链接，用于给参赛选手提供代码打印服务的功能；线上赛无此功能。</li>
    <li>线下赛的参赛帐号只能在后台管理界面批量添加；线上赛在比赛结束前任何时刻都可以注册比赛。</li>
    <li>线下赛场景中批量生成的帐号会被禁止修改个人信息。</li>
    <li>线下赛所添加的参赛帐号中，非批量生成的帐号为打星参赛模式；线上赛无此功能。</li>
    <li>线下赛可以滚榜；线上赛无此功能。</li>
</ol>
<p>　　请注意线上赛也可在机房集中进行，除了 ACM 校赛等组队赛之外，通常创建线上赛。</p>

<br />
<h3>关于积分</h3>
<p>　　在参加比赛之后，参赛者将根据排名得到一定积分。积分榜单可在 <?= \yii\helpers\Html::a('排行榜页面', ['/rating'], ['target' => '_blank']) ?>
    查看。如果参加了比赛但没有通过任何题目，不会计算比赛积分。积分一定程度上反映了参赛者的程序设计能力，可供各位同学找准自己的定位。
</p>

<br />
<h3>积分计算方式</h3>
<p>　　采用 Elo Ranking 算法，具体见
    <a href="https://en.wikipedia.org/wiki/Elo_rating_system" target="_blank">
        Wikipedia 相关词条</a>。
</p>