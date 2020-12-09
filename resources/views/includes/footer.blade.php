        <!-- footer area start -->
        <section class="footer__area footer-bg" id="footertable">
            <div class="footer__top pt-100 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title mb-25">
                                    <a href="index.html"><img src="/assets/img/logo/logo-2.png" alt="logo"></a>
                                </div>
                                <div class="footer__widget-content">
                                    <p>Outstock is a premium Templates theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
                                    <div class="footer__contact">
                                        <ul>
                                            <li class="links"><a href="http:://facebook.com/ecoms"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="links"><a href="http:://facebook.com/ecoms"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="http:://facebook.com/ecoms"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="footer__widget mb-30">
                                <div class="footer__widget-title">
                                    <h5>information</h5>
                                </div>
                                <div class="footer__widget-content">
                                    <div class="footer__links">
                                        <ul>
                                            @if (session()->has('mssg'))
                                                <div class="btn btn-success" class="col-lg-6 col-md-6 col-12">
                                                    You are Successfully added to th Mailing List
                                                </div>
                                            @endif
                                            <h3 class="abouth3">Join our mailing list</h3>
                                            <form action="/" method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="email" name="email" class="form-control sub-in" value="" placeholder="Email address" autocorrect="off" autocapitalize="off">
                                                    <span>
                                                    <button type="submit" class="btn btn-info" style="height: 55px;" name="subscribe">
                                                        <span class="newsletter__submit-text--large">Subscribe</span>
                                                    </button>
                                                    </span>
                                                </div>
                                                <p class="errors">{{ $errors->first('email') }}</p>
                                            </form>
                                              <ul style="margin-top: 50px;">
                                                <li class="payment-logo"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-american_express" viewBox="0 0 20 20"><path fill="#444" d="M8.373 7.623v-.46H6.606V9.37h1.767v-.453h-1.24v-.44H8.34v-.453H7.133v-.4zm2.487.134c0-.247-.1-.393-.267-.487-.173-.1-.367-.107-.64-.107H8.74v2.213h.527v-.807h.567c.193 0 .307.02.387.093.093.107.087.3.087.433v.28h.533v-.433c0-.2-.013-.293-.087-.407a.629.629 0 0 0-.26-.187.638.638 0 0 0 .367-.593zm-.693.313c-.073.047-.16.047-.26.047h-.64v-.493h.653c.093 0 .187.007.253.04s.113.1.113.193c-.007.1-.047.173-.12.213zm-8.874.813h1.1l.2.493h1.073V7.643l.767 1.733H4.9l.767-1.733v1.733h.54V7.163h-.873l-.633 1.5-.693-1.5h-.86v2.093l-.9-2.093h-.787L.574 9.23v.14h.513l.207-.487zm.547-1.346l.36.88h-.72l.36-.88zm11.22.1h.5v-.473h-.513c-.367 0-.633.08-.8.26-.227.24-.287.533-.287.867 0 .4.093.653.28.847.147.2.413.273.767.247h.62l.2-.493h1.1l.207.493h1.073v-1.66l1 1.66h.747V7.172h-.54v1.54l-.927-1.54h-.807v2.093l-.893-2.093H14l-.747 1.74h-.24c-.14 0-.287-.027-.367-.113-.1-.113-.147-.28-.147-.52 0-.233.06-.407.153-.5.107-.113.213-.14.407-.14zm1.32-.1l.367.88h-.727l.36-.88zm-3.213-.374h.54v2.213h-.54V7.163zm1.96 4.4a.522.522 0 0 0-.273-.493c-.173-.093-.367-.107-.633-.107h-1.22v2.213h.533v-.807h.567c.193 0 .313.02.387.1.1.1.087.3.087.433v.273h.533v-.44c0-.193-.013-.293-.087-.407a.585.585 0 0 0-.26-.187.61.61 0 0 0 .367-.58zm-.694.314a.534.534 0 0 1-.26.047h-.64v-.493h.653c.093 0 .187 0 .253.04.067.033.107.107.107.2s-.047.167-.113.207zM9.86 10.97H8.173l-.673.727-.653-.727h-2.12v2.213H6.82l.673-.733.653.733h1.027v-.74h.66c.46 0 .92-.127.92-.74-.007-.62-.473-.733-.893-.733zm-3.313 1.747H5.254v-.44h1.16v-.453h-1.16v-.4h1.327l.58.647-.613.647zm2.1.26l-.813-.9.813-.873v1.773zm1.206-.987h-.68v-.56h.687c.193 0 .32.08.32.273 0 .187-.127.287-.327.287zm5.327-.567v-.453h-1.76v2.207h1.76v-.46h-1.233v-.44h1.207v-.453h-1.207v-.4zm4.127.647a.171.171 0 0 0-.047-.053c-.12-.12-.313-.173-.6-.18l-.287-.007a.623.623 0 0 1-.207-.027.169.169 0 0 1-.113-.167c0-.073.02-.12.08-.16.053-.033.12-.04.213-.04h.96v-.473h-1.053c-.553 0-.76.34-.76.66 0 .7.62.667 1.113.687.093 0 .147.013.187.047s.067.08.067.147c0 .06-.027.107-.06.147-.04.04-.113.053-.213.053h-1.013v.473h1.02c.34 0 .587-.093.72-.28a.724.724 0 0 0 .113-.413c-.007-.193-.047-.313-.12-.413zm-.774 1.54h-1.367v-.2c-.16.127-.447.2-.72.2h-4.313v-.713c0-.087-.007-.093-.093-.093h-.067v.807h-1.42v-.833c-.24.1-.507.113-.733.107h-.167v.733h-1.72l-.427-.48-.447.48H4.246v-3.087h2.847l.407.473.433-.473H9.84c.22 0 .58.02.747.18v-.18h1.707c.16 0 .507.033.713.18v-.18h2.58v.18c.127-.12.4-.18.633-.18h1.447v.18c.153-.107.367-.18.66-.18h.98V.258H.574v7.78l.573-1.313h1.38l.18.367v-.367H4.32l.353.793.347-.793h5.127c.233 0 .44.047.593.18v-.18h1.407v.18c.24-.133.54-.18.88-.18h2.033l.187.367v-.367h1.507l.207.367v-.367h1.467v3.08h-1.48l-.28-.467v.467h-1.853l-.2-.493h-.453l-.207.493h-.96c-.38 0-.66-.087-.847-.187v.187h-2.28v-.7c0-.1-.02-.107-.08-.107h-.087v.807H5.288v-.38l-.16.38h-.92l-.16-.38v.373H2.275l-.2-.493h-.453l-.207.493h-.84v9.313h18.727v-5.653c-.207.113-.487.153-.767.153zm-2.013-.907h-1.027v.473h1.027c.533 0 .827-.22.827-.7 0-.227-.053-.36-.16-.467-.12-.12-.313-.173-.607-.18l-.287-.007a.623.623 0 0 1-.207-.027.169.169 0 0 1-.113-.167c0-.073.02-.12.08-.16.053-.033.113-.04.213-.04h.967v-.473h-1.06c-.553 0-.753.34-.753.66 0 .7.62.667 1.113.687.093 0 .147.013.187.047.033.033.067.08.067.147 0 .06-.027.107-.06.147-.033.047-.107.06-.207.06z"></path></svg>
                                                </li>
                                                
                                                <li class="payment-logo"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-bitcoin" viewBox="0 0 49 20"><path fill="#444" d="M6.816 3.875q1.875 0 3.467.908t2.52 2.48.928 3.428q0 1.875-.908 3.467t-2.48 2.529-3.428.938q-1.875 0-3.467-.908t-2.52-2.48T0 10.79t.908-3.467 2.48-2.52 3.428-.928zm.137 9.844q.957.254 1.66.029t.996-1.045q.43-1.23-.684-1.816.84-.195.977-1.113.176-1.152-1.504-1.738l.313-1.25-.762-.176-.293 1.191q-.117-.02-.322-.068t-.283-.068l.293-1.211-.742-.195-.313 1.23q-.176-.02-.488-.098v-.02l-1.035-.254-.195.801.547.137q.371.098.332.449L5.098 9.91l-.508 1.973q-.059.254-.332.195l-.547-.156-.391.879.996.234q.176.059.527.137l-.313 1.27.742.176.313-1.23q.488.137.605.156l-.313 1.23.762.195zm10.664-4.492q.176-.078.449-.156.234-.059.469-.059.547 0 .918.195.391.176.645.508.215.273.391.742.117.43.117.938 0 .781-.293 1.445-.254.664-.762 1.191-.469.488-1.152.801-.664.293-1.445.293-.02 0-.137-.01t-.215-.01q-.137 0-.566-.039-.43-.078-.684-.137-.41-.098-.684-.254l1.934-8.047 1.699-.254zm7.012-1.914q0 .195-.098.43-.078.176-.254.352-.137.156-.352.234-.176.098-.449.098-.352 0-.605-.195-.293-.195-.293-.645 0-.195.098-.43.078-.176.254-.352.156-.137.352-.234.234-.098.449-.098.313 0 .625.215.273.215.273.625zm17.207.917q-.273-.195-.273-.645 0-.254.098-.43.098-.195.234-.352.195-.156.371-.234.234-.098.43-.098.313 0 .625.215.273.215.273.625 0 .195-.098.43-.078.215-.234.352-.195.156-.371.234-.176.098-.43.098-.371 0-.625-.195zm-14.785.899h1.855l-.332 1.348h-1.836l-.488 2.051q-.078.352-.078.469-.02.215.059.391.059.176.234.254.156.078.488.078.176 0 .527-.039.156-.039.508-.156l.117 1.27q-.469.156-.723.215-.332.078-.918.078-.781 0-1.191-.215-.41-.234-.586-.625-.195-.352-.156-.898 0-.488.156-1.074l1.074-4.59 1.719-.273zM6.836 8.563q.039 0 .117.02.234.059.381.098t.41.137.4.205.234.303.039.43q-.039.176-.146.293t-.273.156-.303.059-.361-.01-.332-.049-.313-.078-.225-.059zm26.641 2.05q-.254-.098-.449-.156-.215-.078-.586-.078-.84 0-1.309.547-.469.586-.469 1.523 0 .566.234.918.254.352.898.352.332 0 .625-.059.43-.137.527-.176l.117 1.328q-.332.137-.664.215-.43.098-.918.098-.664 0-1.152-.215-.43-.156-.801-.527-.332-.391-.43-.801-.156-.469-.156-.938 0-.703.254-1.426.234-.664.703-1.172.41-.469 1.094-.781.645-.293 1.445-.293.449 0 .898.098.293.059.703.254zm5.527-.957q.273.313.43.762.137.41.137.957 0 .723-.195 1.328-.254.742-.625 1.211-.41.527-1.035.859-.625.352-1.426.352-.605 0-1.016-.195-.469-.195-.703-.488-.273-.313-.43-.762-.156-.469-.156-.977 0-.645.234-1.328.215-.664.625-1.191t1.035-.859q.605-.352 1.387-.352.566 0 1.016.176.41.156.723.508zm5.488-.254q.039-.02.098-.029t.107-.029.107-.039.098-.039l.508-.117q.293-.059.645-.117.234-.02.781-.02 1.348 0 1.797.742.488.762.176 2.07l-.762 3.145h-1.641l.723-3.086q.078-.41.098-.566.059-.254 0-.469-.02-.195-.195-.332-.215-.137-.508-.137-.215 0-.645.078l-1.074 4.512h-1.66zm-22.07-.273h1.66l-1.406 5.84h-1.621zm18.984 0h1.641l-1.387 5.84h-1.641zM5.098 9.91l.078.02q-.039 0-.078-.02zm11.445 3.809q.098 0 .117.02h.117q.039.02.117.02h.215q.391 0 .723-.195.332-.176.586-.508.234-.273.41-.703.137-.469.137-.84 0-.527-.176-.82-.176-.313-.664-.313-.156 0-.391.059t-.449.234zm21.309-1.446q.078-.332.078-.723 0-.547-.176-.879-.176-.293-.645-.293-.371 0-.645.215t-.449.527q-.215.332-.293.703-.098.43-.098.723 0 .566.176.879.195.293.645.293.371 0 .645-.215.293-.195.469-.518t.293-.713zM6.27 10.828q.039 0 .186.039t.234.059l.264.059.273.088.273.117.254.127.205.156.156.195.078.234-.029.273q-.039.195-.166.322t-.322.166-.361.059-.43-.02-.391-.059-.381-.088-.273-.068z"></path></svg>
                                                </li>

                                                <li class="payment-logo"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-discover" viewBox="0 0 52 20"><path fill="#444" d="M22.598 14.617q-1.094.488-2.031.488-1.855 0-3.125-1.26t-1.27-3.115q0-1.797 1.299-3.076t3.135-1.279q1.035 0 1.992.508v1.914q-.957-.938-2.031-.938-1.152 0-1.943.84t-.791 2.031q0 1.27.791 2.07t2.021.801q1.055 0 1.953-.898v1.914zm-8.086-6.152q-.586-.664-1.328-.664-.527 0-.869.264t-.342.654q0 .332.264.557t.986.479q1.406.508 1.914 1.064t.508 1.553q0 1.211-.811 1.973t-2.08.762q-1.816 0-2.891-1.582l1.055-1.016q.586 1.113 1.777 1.113.547 0 .908-.332t.361-.84q0-.527-.488-.859-.273-.176-1.133-.469-1.133-.43-1.592-.938t-.459-1.387q0-1.016.752-1.699t1.846-.684q1.387 0 2.461.957zm13.164-2.051q1.875 0 3.154 1.26t1.279 3.076-1.289 3.086-3.145 1.27q-1.914 0-3.193-1.25t-1.279-3.145q0-1.797 1.309-3.047t3.164-1.25zm-25.293.137q1.973 0 3.232 1.172t1.26 3.008q0 .918-.391 1.768t-1.113 1.455q-1.211.977-2.988.977H0V6.552h2.383zm5.234 0h1.641v8.379H7.617V6.551zm30.43 0h1.777l-3.633 8.574h-.859l-3.535-8.574h1.758l2.227 5.625zm2.5 0h4.629v1.426h-2.988v1.855h2.871v1.406h-2.871v2.266h2.988v1.426h-4.629V6.551zm8.125 0q1.406 0 2.168.645t.762 1.836q0 .957-.479 1.563t-1.396.801l2.617 3.535h-1.992l-2.266-3.398h-.195v3.398H46.25V6.552h2.422zm-.313 3.847q1.582 0 1.582-1.289 0-1.23-1.582-1.23h-.469v2.52h.469zM2.09 13.504q1.484 0 2.207-.664.43-.391.674-.947t.244-1.162q0-1.27-.918-2.07-.742-.684-2.207-.684h-.449v5.527h.449z"></path></svg>
                                                </li>

                                                <li class="payment-logo"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-litecoin" viewBox="0 0 16 16"><path d="M8 0C3.589 0 0 3.589 0 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm3.063 11.817H4.754l.64-2.468-.868.32.228-.983.892-.32 1.051-4.16h2.56L8.366 7.36l1.028-.389-.297 1.006-1.028.366-.572 2.011h3.954l-.388 1.463z" fill="#222" fill-rule="evenodd"></path></svg>
                                                </li>

                                                <li class="payment-logo"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-maestro" viewBox="0 0 23 15"><path d="M13.838 5.572a7.252 7.252 0 0 0-1.952-3.17c1.263-1.018 2.7-1.527 4.31-1.527 1.223 0 2.357.303 3.402.908a6.746 6.746 0 0 1 2.484 2.484A6.67 6.67 0 0 1 23 7.678c0 1.224-.305 2.361-.918 3.412a6.765 6.765 0 0 1-2.484 2.483 6.658 6.658 0 0 1-3.402.909c-1.61 0-3.047-.51-4.31-1.527a7.265 7.265 0 0 0 1.952-3.17h-.56a7.103 7.103 0 0 1-1.778 2.823 6.824 6.824 0 0 1-1.797-2.823h-.56a7.244 7.244 0 0 0 1.932 3.17c-1.288 1.018-2.712 1.527-4.27 1.527a6.712 6.712 0 0 1-3.412-.909A6.659 6.659 0 0 1 .91 11.09a6.712 6.712 0 0 1-.908-3.412c0-1.223.303-2.36.908-3.41a6.659 6.659 0 0 1 2.484-2.485A6.712 6.712 0 0 1 6.804.875c1.56 0 2.983.509 4.271 1.527a7.244 7.244 0 0 0-1.932 3.17h.56A6.838 6.838 0 0 1 11.5 2.749a7.094 7.094 0 0 1 1.778 2.823h.56zM6.224 9.244l.676-3.44H5.548l-.929 2.125-.058-2.126H3.247l-.657 3.44h.773l.502-2.627.136 2.628h.773l1.14-2.648-.522 2.648h.832zm9.47-.657a.764.764 0 0 1-.213.02c-.193 0-.29-.065-.29-.193 0-.04.007-.084.02-.136l.213-1.16h.425l.116-.657h-.425l.115-.657h-.831l-.406 2.126-.02.231-.038.27a1.086 1.086 0 0 0-.039.252c0 .412.226.618.677.618.129 0 .322-.032.58-.097l.116-.617zM9.2 7.756c.052-.27.077-.458.077-.56a.868.868 0 0 0-.067-.349.63.63 0 0 0-.213-.261 1.106 1.106 0 0 0-.348-.164 1.641 1.641 0 0 0-.454-.059c-.168 0-.51.058-1.024.174l-.116.619.077-.02.136-.038c.232-.052.457-.078.676-.078.361 0 .542.09.542.27a.565.565 0 0 1-.01.078.68.68 0 0 0-.01.115 1.303 1.303 0 0 0-.348-.038c-.477 0-.845.097-1.102.29a.94.94 0 0 0-.387.792c0 .233.071.416.213.552.142.135.329.203.56.203.387 0 .677-.117.87-.349v.31h.696v-.077l.02-.116.02-.136.038-.174.154-.984zm2.648.734a2.48 2.48 0 0 1-.888.154c-.477 0-.716-.16-.716-.483v-.097h1.663c.077-.27.116-.496.116-.677 0-.309-.1-.557-.3-.744-.2-.186-.48-.28-.841-.28-.426 0-.777.158-1.053.474-.277.316-.415.712-.416 1.189 0 .838.477 1.257 1.43 1.257.322 0 .612-.033.87-.097l.135-.696zm8.775-.522c.013-.103.02-.212.02-.328 0-.374-.116-.68-.349-.919-.232-.238-.56-.357-.985-.357-.49 0-.883.155-1.179.464-.296.31-.444.71-.444 1.199 0 .85.438 1.275 1.314 1.275.953 0 1.495-.444 1.624-1.334h-.001zm-6.34-1.527a14.072 14.072 0 0 0-.753-.058c-.297 0-.541.045-.735.136a.935.935 0 0 0-.415.338.882.882 0 0 0-.126.474c0 .348.22.6.657.754a.218.218 0 0 0 .059.039c.116.051.193.086.231.106.038.019.067.044.087.077.02.032.03.067.029.106 0 .167-.168.251-.503.251-.18 0-.431-.032-.754-.097l-.116.638h.039l.154.039c.013 0 .046.003.097.01.052.006.097.01.136.01.077 0 .167.003.27.01.103.006.167.01.193.01.876 0 1.314-.31 1.314-.929 0-.36-.206-.625-.618-.792a2.953 2.953 0 0 1-.329-.155.13.13 0 0 1-.058-.116c0-.167.142-.25.425-.25.09 0 .29.012.599.038l.118-.639zM16.7 9.244c.142-.85.265-1.401.367-1.653.103-.251.258-.377.465-.377h.097l.097.059.31-.793a.296.296 0 0 0-.117-.039h-.154c-.245 0-.483.142-.715.426l.077-.406h-.773l-.503 2.784h.85v-.001zm-6.378-1.74c.09-.335.277-.502.56-.502.258 0 .387.122.387.367a.31.31 0 0 1-.01.077.258.258 0 0 0-.01.058h-.928.001zm8.988-.464c.296 0 .444.193.444.58 0 .039-.003.094-.01.164a1.88 1.88 0 0 0-.01.145.935.935 0 0 1-.154.377.8.8 0 0 1-.251.241.49.49 0 0 1-.232.077c-.322 0-.483-.212-.483-.638 0-.232.064-.448.193-.647.129-.2.296-.3.503-.3v.001zM7.46 8.413c0-.297.238-.445.715-.445.013 0 .036.004.067.01a.52.52 0 0 0 .106.01.812.812 0 0 1-.077.367.56.56 0 0 1-.523.329c-.193 0-.29-.09-.29-.27l.002-.001z" fill="#444" fill-rule="evenodd"></path></svg>
                                                </li>

                                                <li class="payment-logo"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-master" viewBox="0 0 23 15"><path d="M17.375 8.166c-.537 0-.644.237-.644.437 0 .1.061.276.284.276.437 0 .53-.575.514-.699-.015 0-.03-.015-.154-.015zm-6.301-.975c-.399 0-.476.453-.476.499h.813c-.008-.039.07-.499-.337-.499zm-5.526.975c-.537 0-.645.237-.645.437 0 .1.061.276.285.276.437 0 .53-.575.514-.699-.016 0-.03-.015-.154-.015zm15.45-.899c-.323 0-.576.376-.576.937 0 .346.122.568.384.568.399 0 .583-.515.583-.899.008-.422-.13-.606-.392-.606zM16.292.951a6.7 6.7 0 0 0-4.368 1.62 7.007 7.007 0 0 1 1.88 3.024h-.322a6.772 6.772 0 0 0-1.789-2.817 6.723 6.723 0 0 0-1.788 2.817h-.323A7.004 7.004 0 0 1 11.58 2.47 6.817 6.817 0 0 0 7.097.798 6.859 6.859 0 0 0 .236 7.659a6.86 6.86 0 0 0 11.343 5.196 7.07 7.07 0 0 1-1.872-2.764h.33a6.727 6.727 0 0 0 1.657 2.449 6.731 6.731 0 0 0 1.659-2.449h.33a6.937 6.937 0 0 1-1.759 2.656 6.7 6.7 0 0 0 4.368 1.62c3.699 0 6.708-3.009 6.708-6.709C23 3.958 19.992.95 16.292.95v.001zM3.13 9.44l.414-2.618-.936 2.618h-.499l-.061-2.618-.445 2.618H.897l.584-3.477h1.066l.031 2.133.721-2.133H4.45L3.875 9.44H3.13zm2.495 0l.022-.277c-.015 0-.23.338-.752.338-.268 0-.705-.146-.705-.783 0-.813.66-1.081 1.297-1.081.1 0 .314.015.314.015s.023-.046.023-.184c0-.223-.2-.254-.468-.254-.475 0-.798.13-.798.13l.107-.63s.384-.16.883-.16c.26 0 1.005.03 1.005.882l-.284 2.01h-.644V9.44zm2.709-.89c0 .967-.937.928-1.105.928-.614 0-.799-.085-.822-.092l.1-.636c0-.008.307.107.645.107.199 0 .453-.015.453-.253 0-.354-.913-.269-.913-1.106 0-.737.544-.951 1.09-.951.414 0 .674.053.674.053l-.091.645s-.4-.03-.499-.03c-.26 0-.399.052-.399.237 0 .376.868.191.868 1.098h-.001zM9.4 7.306l-.207 1.266c-.016.1.015.238.268.238.061 0 .138-.023.185-.023l-.092.622c-.077.023-.284.092-.545.092-.338 0-.583-.192-.583-.622 0-.292.414-2.67.43-2.686h.73l-.078.43h.36l-.091.683H9.4zm1.772 1.55c.369 0 .775-.176.775-.176l-.13.705s-.238.123-.768.123c-.583 0-1.258-.246-1.258-1.274 0-.89.544-1.681 1.274-1.681.798 0 1.044.583 1.044 1.067 0 .191-.092.668-.092.668h-1.49c0-.016-.137.567.645.567v.001zm2.426-1.42c-.506-.176-.544.799-.76 2.01h-.752l.453-2.824h.683l-.06.407s.245-.445.567-.445a.92.92 0 0 1 .138.007c-.092.2-.185.376-.269.844v.001zm2.096 1.965s-.392.1-.637.1c-.868 0-1.313-.6-1.313-1.512 0-1.374.822-2.103 1.666-2.103.376 0 .821.176.821.176l-.122.775s-.299-.207-.668-.207c-.498 0-.944.476-.944 1.335 0 .423.208.821.722.821.246 0 .606-.176.606-.176l-.13.79-.001.001zm1.756.039l.023-.277c-.016 0-.23.338-.752.338-.268 0-.706-.146-.706-.783 0-.813.66-1.081 1.297-1.081.1 0 .315.015.315.015s.023-.046.023-.184c0-.223-.2-.254-.468-.254-.476 0-.799.13-.799.13l.108-.63s.384-.16.882-.16c.26 0 1.006.03 1.006.882l-.284 2.01c-.008-.007-.645-.007-.645-.007zm1.512.008h-.752l.453-2.825h.683l-.06.407s.245-.446.567-.446c.091 0 .138.008.138.008-.1.2-.185.376-.269.844-.506-.176-.544.807-.76 2.01v.002zm2.234-.008l.03-.26s-.245.306-.683.306c-.606 0-.906-.583-.906-1.182 0-.929.561-1.735 1.228-1.735.43 0 .706.376.706.376l.16-.975h.73l-.56 3.469h-.706zm1.367-.015a.195.195 0 0 1-.108.03.178.178 0 0 1-.107-.03.226.226 0 0 1-.085-.085.187.187 0 0 1-.03-.108c0-.038.007-.077.03-.107a.226.226 0 0 1 .085-.085.187.187 0 0 1 .107-.03c.039 0 .077.007.108.03.038.016.061.046.085.085.023.038.03.069.03.107a.178.178 0 0 1-.03.108.218.218 0 0 1-.085.085zm-.024-.353a.197.197 0 0 0-.183 0 .156.156 0 0 0-.07.069.197.197 0 0 0 0 .183c.016.03.039.054.07.07a.197.197 0 0 0 .183 0 .151.151 0 0 0 .07-.07.197.197 0 0 0 0-.183.156.156 0 0 0-.07-.07zm-.03.284l-.023-.039a.18.18 0 0 0-.039-.053c-.008-.007-.015-.008-.03-.008h-.023v.1h-.038v-.238h.084c.031 0 .047 0 .062.008.014.008.022.016.03.023.008.007.008.022.008.038s-.008.03-.016.046c-.016.016-.03.023-.046.023.008 0 .016.008.023.016.006.008.022.023.038.046l.03.047h-.06v-.01zm-.015-.17c0-.008 0-.016-.008-.016l-.016-.015c-.008 0-.023-.008-.038-.008h-.047v.069h.047c.022 0 .038 0 .046-.008.016-.008.016-.016.016-.023v.001z" fill="#444" fill-rule="evenodd"></path></svg>
                                                </li>  
                                                <li class="payment-logo"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-visa" viewBox="0 0 27 20"><path fill="#444" d="M19.16 8.465q-.781-.352-1.621-.332-.605 0-.928.225t-.322.508.283.508.947.557q1.855.84 1.836 2.285 0 1.328-1.035 2.119t-2.773.791q-1.445-.02-2.441-.449l.293-1.914.273.156q1.113.449 2.07.449.527 0 .918-.225t.41-.635q0-.273-.254-.498t-.918-.557q-.371-.195-.654-.371t-.596-.459-.488-.664-.176-.811q.02-1.23 1.064-2.002t2.666-.771q1.035 0 1.953.332l-.273 1.855zm-9.14-1.934l-3.457 8.477H4.258L2.461 8.25q.938.371 1.709 1.133t1.104 1.66Q4.063 7.703.001 6.688l.02-.156h3.535q.82 0 .996.684l.762 3.906.254 1.172 2.129-5.762h2.324zm3.085 0l-1.367 8.477H9.55l1.367-8.477h2.188zm13.946 8.477H25q-.156-.996-.234-1.27l-2.813-.02-.449 1.289H19.18l3.262-7.793q.293-.684 1.152-.684h1.68zM23.77 8.797l-.137.361q-.078.205-.127.342t-.029.117q-.703 1.875-.879 2.383h1.777l-.469-2.461z"></path></svg>
                                                </li>
                                                
                                            
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="footer__copyright">
                                <p>© <?php echo(date("Y")); ?> <a href="index.html">Outstock</a> all rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="footer__social f-right">
                                <ul>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fas fa-share-alt"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer area end -->
		<!-- JS here -->
        <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="/assets/js/vendor/waypoints.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        {{-- <script src="/assets/assets/js/bootstrap.min.js"></script> --}}
        <script src="/assets/js/metisMenu.min.js"></script>
        <script src="/assets/js/slick.min.js"></script>
        <script src="/assets/js/jquery.fancybox.min.js"></script>
        <script src="/assets/js/isotope.pkgd.min.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/jquery-ui-slider-range.js"></script>
        <script src="/assets/js/ajax-form.js"></script>
        <script src="/assets/js/wow.min.js"></script>
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>