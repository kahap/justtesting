
    <main role="main">
        <h1><span>會員中心</span><small>member center</small></h1>
        <section id="member-zone">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="list-group">
                            <a href="?item=member_center" class="list-group-item list-group-item-action active">基本資料</a>
                            <a href="?item=member_center&action=password_edit" class="list-group-item list-group-item-action">變更密碼</a>
                            <a href="?item=member_center&action=order" class="list-group-item list-group-item-action">訂單查詢</a>
                            <a href="?item=member_center&action=pay" class="list-group-item list-group-item-action">我要繳款</a>
                        </div>
                        <div class="sell xs-none" style="height: auto;background-image: linear-gradient(151deg, #ff7f00,#fff0c9);">
                            <?php
                            $ad = new Advertise();
                            $adData = $ad->getAllOrderBy(3,false);
                            if($adData != ""){
                                foreach($adData as $key => $value){
                                    ?>
                                    <li>
                                        <a href="<?php echo $value["adLink"]; ?>">
                                            <img src="../admin/<?php echo $value["adImage"]; ?>" alt="slide-left" style="width: 100%">
                                        </a>
                                    </li>
                                    <?php
                                }
                            }else{
                                ?>
                                <li><a href="#"><img alt="" src="assets/images/Not-found.png" title=""  alt="slide-left"></a></li>
                                <li><a href="#"><img alt="" src="assets/images/Not-found.png" title=""  alt="slide-left"></a></li>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="section-order bg-pale">
                            訂單編號<span class="text-orange">A201809210004</span>
                            訂單狀態<span class="text-orange">可繳款</span>
                        </div>
                        <div class="section-order bg-white">
                            <div class="section-order-title">購買商品</div>
                            <div class="form-group row">
                                <div class="col-sm-3">商品名稱</div>
                                <div class="col-sm-9">Apple MacBook Air 13.3/1.8/8G/128G Flash*（MQD32TA/A）6期0利率</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">商品規格</div>
                                <div class="col-sm-9">銀色</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">月付</div>
                                <div class="col-sm-9">1,659 元</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">期數</div>
                                <div class="col-sm-9">24 期</div>
                            </div>
                        </div>
                        <div class="section-order bg-white">
                            <div class="section-order-title">申請人資料</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">申請人中文姓名</div>
                                        <div class="col">大中天</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">身分別</div>
                                        <div class="col">學生</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">學校Email</div>
                                        <div class="col">testKK@gmail.com</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">常用聯絡Email</div>
                                        <div class="col">testKK@gmail.com</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">現住市話</div>
                                        <div class="col">0226739991</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">戶籍電話</div>
                                        <div class="col">0226739991</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">行動電話</div>
                                        <div class="col">0900000000</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">住房所有權</div>
                                        <div class="col"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">戶籍地址</div>
                                        <div class="col">新北市平溪區</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">現住地址</div>
                                        <div class="col">台北市中正區基隆路</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">申請人身份證正面</div>
                                        <div class="col-12">
                                            <img src="https://via.placeholder.com/198x110" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">申請人身份證反面</div>
                                        <div class="col-12">
                                            <img src="https://via.placeholder.com/198x110" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">身份證字號</div>
                                        <div class="col">A138541115</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">出生年月日</div>
                                        <div class="col">民國100年4月1日</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">申請人身份證發證日期</div>
                                        <div class="col">50-1-1</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">申請人身份證發證地點</div>
                                        <div class="col">北縣</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">申請人身份證發證類別</div>
                                        <div class="col">初發</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-order bg-white">
                            <div class="section-order-title">收貨人資料</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">收貨人姓名</div>
                                        <div class="col">大中天</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">收貨人地址</div>
                                        <div class="col">台北市中正區基隆路</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">收貨人市話</div>
                                        <div class="col">0226739991</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">收貨人手機</div>
                                        <div class="col">0900000000</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">收貨備註</div>
                                        <div class="col-12"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-order bg-white">
                            <div class="section-order-title">工作</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">公司名稱</div>
                                        <div class="col">拉拉股份有限公司</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">年資</div>
                                        <div class="col">兩年</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">月薪</div>
                                        <div class="col">10000-20000</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">公司市話</div>
                                        <div class="col">0286719742</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-order bg-white">
                            <div class="section-order-title">信用卡</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">信用卡號(僅供參考)</div>
                                        <div class="col"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">發卡銀行</div>
                                        <div class="col"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">信用卡有效期限</div>
                                        <div class="col"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-order bg-white">
                            <div class="section-order-title">統一編號</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">是否需要統一編號</div>
                                        <div class="col">否</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">統一編號</div>
                                        <div class="col"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">公司抬頭</div>
                                        <div class="col"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-order bg-white">
                            <div class="section-order-title">聯絡人資料</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">親屬姓名</div>
                                        <div class="col">小中大</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">親屬關係</div>
                                        <div class="col">父子</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">親屬市話</div>
                                        <div class="col"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">親屬手機</div>
                                        <div class="col">0957192738</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">朋友姓名</div>
                                        <div class="col">魯凱</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">朋友關係</div>
                                        <div class="col">戀人</div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">朋友市話</div>
                                        <div class="col"></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col">朋友手機</div>
                                        <div class="col">0957192738</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-order bg-white">
                            <div class="section-order-title">備註</div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">可照會時間</div>
                                        <div class="col"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col">注意事項</div>
                                        <div class="col"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-order bg-white">
                            <div class="section-order-title">證件資料</div>
                            <div class="form-group row">
                                <div class="col">申請人學生證正面</div>
                                <div class="col-12"><img src="https://via.placeholder.com/510x284" alt=""></div>
                            </div>
                            <div class="form-group row">
                                <div class="col">申請人學生證反面</div>
                                <div class="col-12"><img src="https://via.placeholder.com/510x284" alt=""></div>
                            </div>
                            <div class="form-group row">
                                <div class="col">申請人自拍照</div>
                                <div class="col-12"><img src="https://via.placeholder.com/510x284" alt=""></div>
                            </div>
                            <div class="section-order-title">請在下方兩處，以滑鼠或手寫功能簽上正楷簽名</div>
                            <p>本票： 憑票於中華民國 年 月 日無條件支付 大方藝彩行銷顧問股份有限公司或指定人
                            <br>新台幣　 零  拾  柒  萬  肆  仟  陸  佰  陸  拾  肆   　元整
                            <br>此總額為您選擇之月付金X期數
                            <br>此本票免除作成拒絕證書及票據法第八十九條之通知義務，
                            <br>利息自到期日迄清償日止按年利率百分之二十計付，
                            <br>發票人授權持票人得填載到期日。
                            <br>付款地：桃園市桃園區文中路493號4樓
                            <br>此據
                            <br>中華民國 107 年 10 月 02 日
                            <br>約定說明：「此本票係供為分期付款買賣之分期款項總額憑證，俟分期付款完全清償完畢時，此本票自動失效，但如有一期未付，發票人願意就全部本票債務負責清償。」本人同意依法令規定應以書面為之者,得以電子文件為之.依法令規定應簽名或蓋章者，得以電子簽章為之。 </p>
                            <p>發票人中文正楷簽名</p>
                            <div class="sign-zone"></div>
                            <div class="section-order-title"></div>
                            <p>★分期付款期間未繳清以前禁止出售或典當，以免觸法<br>分期付款約定事項： 一、 申請人(即買方)及其連帶保證人向商品經銷商(即賣方)以分期付款方式購買消費性商品，並簽約本「分期付款申請書暨約定書」，業經申請人及其連帶保證人對本條約所有條款均已經合理天數詳細審閱，且已充份理解契約內容，同意與商品經銷商共同遵守「分期付款約定書(點文字可連結閱讀詳文)」之各項約定條款。<br>二、申請人及其連帶保證人於簽約時同意商品經銷商不另書面通知得將支付分期金額之權利及依本約定書約定所有之其他一切權利及利益轉讓與廿一世紀數位科技有限公司及其帳款收買人，受讓人對於分期付款買賣案件擁有核准與否同意權，並茲授權帳款收買人將分期付款總額或核准金額，逕行扣除手續費及相關費用，撥付與商品經銷商指定銀行帳戶，相關手續費金額之約定則按商品經銷商與 大方藝彩行銷顧問股份有限公司所簽訂相關之合約約定之，申請人及其連帶保證人絕無異議。<br>三、申請人（即買方）及其連帶保證人聲明確實填寫及簽訂本「分期付款申請書暨約定書」內容，且交付商品經銷商之任何文件中並無不實之陳述或說明之情事。 </p>
                            <div class="form-check text-left m-2">
                                <input class="form-check-input" type="checkbox" id="FieldsetCheck">
                                <label class="form-check-label" for="FieldsetCheck">我已詳細閱讀並同意以上條款及<a href="#" class="text-orange">「分期付款約定書(點文字可連結閱讀詳文)」</a>之內容及所有條款</label>
                            </div>
                            <div class="form-check text-left m-2">
                                <input class="form-check-input" type="checkbox" id="FieldsetCheck">
                                <label class="form-check-label" for="FieldsetCheck">我已詳細閱讀並同意<a href="#" class="text-orange">免責聲明</a>、<a href="#" class="text-orange">服務條款</a>、<a href="#" class="text-orange">隱私權聲明</a>等條款</label>
                            </div>
                            <p>申請人中文正楷簽名</p>
                            <div class="sign-zone"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>