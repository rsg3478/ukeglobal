<section class="bg-grey p-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>문의하기</h3>
                <form action="" method="post" class="was-validated divcenter">
                    <div class="form-group">
                        <label for="inquiry_title">문의 제목 : </label> 
                        <input type="text" class="form-control" id="title" placeholder="문의 제목을 작성해주세요" name="title" required="">
                        <div class="invalid-feedback">
                            제목을 써주세요.
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="inquiry_contents">문의 내용 :</label>
                            <textarea class="form-control" rows="5" id="i_contents" placeholder="문의 내용을 작성해주세요" name="content" required=""></textarea>
                            <div class="invalid-feedback">
                                내용을 채워주세요.
                            </div>
                        </div>							
                    </div>
                    <div class="form-group">
                        <label for="email">이메일 : </label> 
                        <div class="input-group  mt-3 mb-3">
                            <input type="text" class="form-control" placeholder="이메일을 입력해주세요" id="email01" name="email01" required="">
                            <div class="input-group-prepend m_displaycontents">
                                <select class="form-control" id="email02" name="email02">
                                    <option>@naver.com</option>
                                    <option>@daum.net</option>
                                    <option>@gmail.com</option>
                                    <option>@nate.com</option>
                                    <option>@hanmail.net</option>
                                    <option>@kakao.com</option>
                                </select>
                            </div>
                            <div class="invalid-feedback">
                                이메일을 입력해주세요
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary absolute right0" onclick="send_mail()">문의하기</button>
                </form>
            </div>
        </div>
    </div>
</section>