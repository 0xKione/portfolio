<div class='demo-header'>
    <h1>JIGL Usage</h1>
    <div>Here is a first draft of how to use the JIGL library and the different sections to use the library</div>
</div>
<div class='demo-navigation'>
    <ul>
        <li><a href="jigl/#inputTypes">Input Types</a></li>
        <li><a href="jigl/#inputSizes">Input Sizes</a></li>
        <li><a href="jigl/#inputOptions">Input Options</a></li>
        <li><a href="jigl/#inputApi">JavaScript API</a></li>
    </ul>
</div>
<div class='demo-sections'>
    <div id="inputTypes" class='demo-section'>
        <h2>Input Types</h2>
        <div class='demo-section-header'>JIGL uses form compliant inputs to create text, textarea, select, and autocomplete inputs</div>
        <div class='demo-section-navigation'>
            <h3>Navigation</h3>
            <ul>
                <li><a href='jigl/#textInput'>Text</a></li>
                <li><a href='jigl/#emailInput'>Email</a></li>
                <li><a href='jigl/#passwordInput'>Password</a></li>
                <li><a href='jigl/#textAreaInput'>Text Area</a></li>
                <li><a href='jigl/#selectInput'>Select</a></li>
                <li><a href='jigl/#autocompleteInput'>Autocomplete</a></li>
            </ul>
        </div>

        <div class='demo-containers'>
            <div class='demo-container'>
                <h3 id='textInput'>Text</h3>
                <div class="jigl jigl-text" tabindex="1">
                    <div class="jigl-label">Input Name</div>
                    <div class="jigl-info">Required</div>
                    <div class="jigl-container">
                        <input class="jigl-field" type="text" name="inputName" />
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-text' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='emailInput'>Email</h3>
                <div class="jigl jigl-email" tabindex="1">
                    <div class="jigl-label">Email</div>
                    <div class="jigl-info">Required</div>
                    <div class="jigl-hint">
                        <span>A valid email address is required. Ex: name@domain.com</span>
                    </div>
                    <div class="jigl-container">
                        <input class="jigl-field" type="text" name="email" />
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-email' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-hint'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class='jigl-field' type='text' name='email'&gt;A valid email address is required. Ex: name@domain.com&lt;/span&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='email' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='passwordInput'>Password</h3>
                <div class="jigl jigl-password" tabindex="1">
                    <div class="jigl-label">Password</div>
                    <div class="jigl-info">Required</div>
                    <div class="jigl-hint">
                        <span>Passwords must be at least 7 characters, have one digit, one lowercase letter, and one uppercase letter</span>
                    </div>
                    <div class="jigl-container">
                        <input class="jigl-field" type="password" name="password" />
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-password' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-hint'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class='jigl-field' type='text' name='email'&gt;Passwords must be at least 7 characters, have one digit, one lowercase letter, and one uppercase letter&lt;/span&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='password' name='password' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='textAreaInput'>Text Area</h3>
                <div class="jigl jigl-textarea" tabindex="1">
                    <div class="jigl-label">Input Name</div>
                    <div class="jigl-info">Required</div>
                    <div class="jigl-container">
                        <textarea class="jigl-field" name="inputName"></textarea>
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-textarea' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;textarea class='jigl-field' name='inputName'&gt;&lt;/textarea&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='selectInput'>Select</h3>
                <div class="jigl jigl-select" tabindex="0">
                    <div class="jigl-label">Input Name</div>
                    <div class="jigl-info">Required</div>
                    <div class="jigl-container">
                        <span class="jigl-dropdown-arrow">
                            <i class="fa fa-caret-down"></i>
                        </span>
                        <input name="inputName" />
                        <div class="jigl-field">
                            <div></div>
                            <span>...</span>
                        </div>
                        <div class="jigl-select-dropdown">
                            <ul>
                                <li class="jigl-option jigl-option-empty" data-value="0"></li>
                                <li class="jigl-option" data-value="1">Value1</li>
                                <li class="jigl-option" data-value="2">Value2</li>
                                <li class="jigl-option" data-value="3">Value3</li>
                                <li class="jigl-option" data-value="4">Value4</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-select' tabindex='0'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class='jigl-dropdown-arrow'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;i class='fa fa-caret-down'&gt;&lt;/i&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/span&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input name='inputName' /&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class='jigl-field'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&gt;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&gt;...&lt;/span&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class='jigl-select-dropdown'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option jigl-option-empty' data-value='0'&gt;&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='1'&gt;Value 1&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='2'&gt;Value 2&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='3'&gt;Value 3&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='4'&gt;Value 4&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='autocompleteInput'>Autocomplete</h3>
                <div class="jigl jigl-autocomplete" tabindex="1">
                    <div class="jigl-label">Input Name</div>
                    <div class="jigl-info">Required</div>
                    <div class="jigl-container">
                        <input class="jigl-field" type="text" name="inputName" />
                        <div class="jigl-autocomplete-dropdown">
                            <ul>
                                <li class="jigl-option" data-value="1">Apple</li>
                                <li class="jigl-option" data-value="2">Apples</li>
                                <li class="jigl-option" data-value="3">Ball</li>
                                <li class="jigl-option" data-value="4">Boston</li>
                                <li class="jigl-option" data-value="5">Cat</li>
                                <li class="jigl-option" data-value="6">Dodge</li>
                                <li class="jigl-option" data-value="7">Dog</li>
                                <li class="jigl-option" data-value="8">Elephant</li>
                                <li class="jigl-option" data-value="9">Football</li>
                                <li class="jigl-option" data-value="10">Fruit</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-autocomplete' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName' /&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class='jigl-autocomplete-dropdown'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='1'&gt;Apple&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='2'&gt;Apples&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='3'&gt;Ball&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='4'&gt;Boston&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='5'&gt;Cat&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='6'&gt;Dodge&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='7'&gt;Dog&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='8'&gt;Elephant&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='9'&gt;Football&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li class='jigl-option' data-value='10'&gt;Fruit&lt/li&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>
        </div>
    </div>

    <div id="inputSizes" class='demo-section'>
        <h2>Input Sizes</h2>
        <div class='demo-section-header'>JIGL allows the user to create multiple different types of input grids up to 6 columns and n rows. All input types are supported by the grid system.</div>
        <div class='demo-section-navigation'>
            <h3>Navigation</h3>
            <ul>
                <li><a href='jigl/#twoColGridInput'>2 Column Grid</a></li>
                <li><a href='jigl/#threeColGridInput'>3 Column Grid</a></li>
                <li><a href='jigl/#fourColGridInput'>4 Column Grid</a></li>
                <li><a href='jigl/#fiveColGridInput'>5 Column Grid</a></li>
                <li><a href='jigl/#sixColGridInput'>6 Column Grid</a></li>
                <li><a href='jigl/#twoByTwoGridInput'>2x2 Grid</a></li>
                <li><a href='jigl/#threeByThreeGridInput'>3x3 Grid</a></li>
                <li><a href='jigl/#fourByFourGridInput'>4x4 Grid</a></li>
                <li><a href='jigl/#customGridInput'>Custom Sized Grid</a></li>
            </ul>
        </div>

        <div class='demo-containers'>
            <div class='demo-container'>
                <h3 id='twoColGridInput'>2 Column Grid</h3>
                <div style='overflow: hidden;'>
                    <div class="jigl jigl-2 jigl-text jigl-left" tabindex="1">
                        <div class="jigl-label">Input Name1</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName" />
                        </div>
                    </div>
                    <div class="jigl jigl-2 jigl-text jigl-right" tabindex="1">
                        <div class="jigl-label">Input Name2</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName" />
                        </div>
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name1&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName1' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name2&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName2' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='threeColGridInput'>3 Column Grid</h3>
                <div style='overflow: hidden;'>
                    <div class="jigl jigl-3 jigl-text jigl-left" tabindex="1">
                        <div class="jigl-label">Input Name1</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName1" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-center" tabindex="1">
                        <div class="jigl-label">Input Name2</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName2" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-right" tabindex="1">
                        <div class="jigl-label">Input Name3</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName3" />
                        </div>
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name1&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName1' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-center' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name2&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName2' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name3&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName3' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='fourColGridInput'>4 Column Grid</h3>
                <div>See the example for a <a href="jigl/#threeColGridInput">3 Column Grid</a> but change the class name of each to <strong>jigl-4</strong> and add another input before <strong>jigl-right</strong></div>
            </div>

            <div class='demo-container'>
                <h3 id='fiveColGridInput'>5 Column Grid</h3>
                <div>See the example for a <a href="jigl/#threeColGridInput">3 Column Grid</a> but change the class name of each to <strong>jigl-5</strong> and add 2 more inputs before <strong>jigl-right</strong></div>
            </div>

            <div class='demo-container'>
                <h3 id='sixColGridInput'>6 Column Grid</h3>
                <div>See the example for a <a href="jigl/#threeColGridInput">3 Column Grid</a> but change the class name of each to <strong>jigl-6</strong> and add 3 more inputs before <strong>jigl-right</strong></div>
            </div>

            <div class='demo-container'>
                <h3 id='twoByTwoGridInput'>2x2 Grid</h3>
                <div style='overflow: hidden;'>
                    <div class="jigl jigl-2 jigl-text jigl-top-left" tabindex="1">
                        <div class="jigl-label">Input Name1</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName1" />
                        </div>
                    </div>
                    <div class="jigl jigl-2 jigl-text jigl-top-right" tabindex="1">
                        <div class="jigl-label">Input Name2</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName2" />
                        </div>
                    </div>
                    <div class="jigl jigl-2 jigl-text jigl-bottom-left" tabindex="1">
                        <div class="jigl-label">Input Name3</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName3" />
                        </div>
                    </div>
                    <div class="jigl jigl-2 jigl-text jigl-bottom-right" tabindex="1">
                        <div class="jigl-label">Input Name4</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName4" />
                        </div>
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-top-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name1&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName1' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-top-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name2&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName2' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-bottom-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name3&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName3' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-bottom-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name4&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName4' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='threeByThreeGridInput'>3x3 Grid</h3>
                <div style='overflow: hidden;'>
                    <div class="jigl jigl-3 jigl-text jigl-top-left" tabindex="1">
                        <div class="jigl-label">Input Name1</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName1" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-top-center" tabindex="1">
                        <div class="jigl-label">Input Name2</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName2" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-top-right" tabindex="1">
                        <div class="jigl-label">Input Name3</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName3" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-middle-left" tabindex="1">
                        <div class="jigl-label">Input Name4</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName4" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-middle-center" tabindex="1">
                        <div class="jigl-label">Input Name5</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName5" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-middle-right" tabindex="1">
                        <div class="jigl-label">Input Name6</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName6" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-bottom-left" tabindex="1">
                        <div class="jigl-label">Input Name7</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName7" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-bottom-center" tabindex="1">
                        <div class="jigl-label">Input Name8</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName8" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-bottom-right" tabindex="1">
                        <div class="jigl-label">Input Name9</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName9" />
                        </div>
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-top-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name1&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName1' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-top-center' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name2&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName2' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-top-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name3&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName3' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-middle-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name4&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName4' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-middle-center' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name5&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName5' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-middle-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name6&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName6' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-bottom-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name7&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName7' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-bottom-center' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name8&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName8' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-bottom-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name9&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName9' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='fourbyFourGridInput'>4 Column Grid</h3>
                <div>See the example for a <a href="jigl/#threebyThreeGridInput">3x3 Grid</a> but change the class name of each to <strong>jigl-4</strong> and add another row of middle inputs before the <strong>jigl-bottom-*</strong> input row</div>
            </div>

            <div class='demo-container'>
                <h3 id='customGridInput'>Custom Sized Grid</h3>
                <div>You can use any number of inputs together with eachother as long as you complete a full row with each one</div>
                <div style='overflow: hidden;'>
                    <div class="jigl jigl-1 jigl-text jigl-top" tabindex="1">
                        <div class="jigl-label">Input Name1</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName1" />
                        </div>
                    </div>
                    <div class="jigl jigl-2 jigl-text jigl-middle-left" tabindex="1">
                        <div class="jigl-label">Input Name2</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName2" />
                        </div>
                    </div>
                    <div class="jigl jigl-2 jigl-text jigl-middle-right" tabindex="1">
                        <div class="jigl-label">Input Name3</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName3" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-middle-left" tabindex="1">
                        <div class="jigl-label">Input Name4</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName4" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-middle-center" tabindex="1">
                        <div class="jigl-label">Input Name5</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName5" />
                        </div>
                    </div>
                    <div class="jigl jigl-3 jigl-text jigl-middle-right" tabindex="1">
                        <div class="jigl-label">Input Name6</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName6" />
                        </div>
                    </div>
                    <div class="jigl jigl-1 jigl-text jigl-middle" tabindex="1">
                        <div class="jigl-label">Input Name7</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName7" />
                        </div>
                    </div>
                    <div class="jigl jigl-2 jigl-text jigl-bottom-left" tabindex="1">
                        <div class="jigl-label">Input Name8</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName8" />
                        </div>
                    </div>
                    <div class="jigl jigl-2 jigl-text jigl-bottom-right" tabindex="1">
                        <div class="jigl-label">Input Name9</div>
                        <div class="jigl-info">Required</div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName9" />
                        </div>
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-1 jigl-text jigl-top' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name1&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName1' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-middle-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name2&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName2' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-middle-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name3&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName3' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-middle-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name4&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName4' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-middle-center' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name5&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName5' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-3 jigl-text jigl-middle-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name6&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName6' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-1 jigl-text jigl-middle' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name7&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName7' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-bottom-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name8&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName8' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-2 jigl-text jigl-bottom-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name9&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName9' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>
        </div>
    </div>

    <div id="inputOptions" class='demo-section'>
        <h2>Input Options</h2>
        <div class='demo-section-header'>JIGL provides a number of options for the user to customize the appearance and functionality for the inputs. These can be used either individually or all at once with the exception of Non-validating Inputs mixed with Miniture Validation since they are conflicting options so miniature validation will be ignored.</div>
        <div class='demo-section-navigation'>
            <h3>Navigation</h3>
            <ul>
                <li><a href='jigl/#nonValidatedInput'>Non-validating Inputs</a></li>
                <li><a href='jigl/#miniValidInput'>Miniature Validation</a></li>
                <li><a href='jigl/#disabledInput'>Disabled Inputs</a></li>
                <li><a href='jigl/#roundedInput'>Rounded Inputs</a></li>
                <li><a href='jigl/#darkInput'>Dark Inputs</a></li>
            </ul>
        </div>

        <div class='demo-containers'>
            <div class='demo-container'>
                <h3 id='nonValidatedInput'>Non-validating Inputs</h3>
                <div>To stop an input from validating, you can either tag the base with the class <strong>jigl-no-valid</strong> or you can omit the <strong>jigl-info</strong> tag</div>
                <div class="jigl jigl-text jigl-no-valid" tabindex="1">
                    <div class="jigl-label">Input Name</div>
                    <div class="jigl-container">
                        <input class="jigl-field" type="text" name="inputName" />
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-text jigl-no-valid' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='miniValidInput'>Miniature Validation</h3>
                <div>This provides a miniature validation icon instead of spelling it out for use with smaller inputs, just add the class <strong>info-minify</strong> to the <strong>jigl-info</strong> tag</div>
                <div style="overflow: hidden;">
                    <div class="jigl jigl-4 jigl-text jigl-left" tabindex="1">
                        <div class="jigl-label">Input Name1</div>
                        <div class="jigl-info info-minify"><i class="fa fa-exclamation"></i></div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName1" />
                        </div>
                    </div>
                    <div class="jigl jigl-4 jigl-text jigl-center" tabindex="1">
                        <div class="jigl-label">Input Name2</div>
                        <div class="jigl-info info-minify"><i class="fa fa-exclamation"></i></div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName2" />
                        </div>
                    </div>
                    <div class="jigl jigl-4 jigl-text jigl-center" tabindex="1">
                        <div class="jigl-label">Input Name3</div>
                        <div class="jigl-info info-minify"><i class="fa fa-exclamation"></i></div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName3" />
                        </div>
                    </div>
                    <div class="jigl jigl-4 jigl-text jigl-right" tabindex="1">
                        <div class="jigl-label">Input Name4</div>
                        <div class="jigl-info info-minify"><i class="fa fa-exclamation"></i></div>
                        <div class="jigl-container">
                            <input class="jigl-field" type="text" name="inputName4" />
                        </div>
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-4 jigl-text jigl-left' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name1&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info info-minify'&gt;&lt;i class='fa fa-exclamation'&gt;&lt;/i&gt;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName1' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-4 jigl-text jigl-center' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name2&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info info-minify'&gt;&lt;i class='fa fa-exclamation'&gt;&lt;/i&gt;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName2' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-4 jigl-text jigl-center' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name3&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info info-minify'&gt;&lt;i class='fa fa-exclamation'&gt;&lt;/i&gt;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName3' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                    <div>&lt;div class='jigl jigl-4 jigl-text jigl-right' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name4&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info info-minify'&gt;&lt;i class='fa fa-exclamation'&gt;&lt;/i&gt;&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName4' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='disabledInput'>Disabled Inputs</h3>
                <div>In some cases it's useful to make an input read-only which is where disabled inputs come in handy, to use them add the class <strong>jigl-disabled</strong> to the root tag of the input</div>
                <div class="jigl jigl-text jigl-disabled" tabindex="1">
                    <div class="jigl-label">Input Name</div>
                    <div class="jigl-container">
                        <input class="jigl-field" type="text" name="inputName" value="Value" />
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-text jigl-disabled' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName' value='Value' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='roundedInput'>Rounded Inputs</h3>
                <div>Input corners can be rounded off if the style of the website calls for it. Any of the inputs can be turned into round inputs by adding the class <strong>jigl-rounded</strong> to the root tag</div>
                <div class="jigl jigl-text jigl-rounded" tabindex="1">
                    <div class="jigl-label">Input Name</div>
                    <div class="jigl-info">Required</div>
                    <div class="jigl-container">
                        <input class="jigl-field" type="text" name="inputName" />
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-text jigl-rounded' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='darkdInput'>Dark Inputs</h3>
                <div>Inputs can be changed to be a dark color and invert all other colors involved by adding the class <strong>jigl-dark</strong> to the root tag</div>
                <div class="jigl jigl-text jigl-dark" tabindex="1">
                    <div class="jigl-label">Input Name</div>
                    <div class="jigl-info">Required</div>
                    <div class="jigl-container">
                        <input class="jigl-field" type="text" name="inputName" />
                    </div>
                </div>
                <code class='demo-container-code'>
                    <div>&lt;div class='jigl jigl-text jigl-dark' tabindex='1'&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-label'&gt;Input Name&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-info'&gt;Required&lt;/div&gt;</div>
                    <div>&nbsp;&nbsp;&lt;div class='jigl-container'&gt;</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&lt;input class='jigl-field' type='text' name='inputName' /&gt;</div>
                    <div>&nbsp;&nbsp;&lt;/div&gt;</div>
                    <div>&lt;/div&gt;</div>
                </code>
            </div>
        </div>
    </div>

    <div id="inputApi" class='demo-section'>
        <h2>JavaScript API</h2>
        <div class='demo-section-header'>JIGL comes with a JavaScipt API that can be used to initialize, manipulate, augment, validate and copy inputs. Any of these can be called after the page is loaded, wrap them in $(document).ready()</div>
        <div class='demo-section-navigation'>
            <h3>Navigation</h3>
            <ul>
                <li><a href='jigl/#init'>init()</a></li>
                <li><a href='jigl/#initializeContainer'>initializeContainer()</a></li>
                <li><a href='jigl/#validateContainer'>validateContainer()</a></li>
                <li><a href='jigl/#isContainerValid'>isContainerValid()</a></li>
                <li><a href='jigl/#createClone'>createClone()</a></li>
                <li><a href='jigl/#resetContainer'>resetContainer()</a></li>
                <li><a href='jigl/#jQueryData'>$(...).data() Functions</a></li>
            </ul>
        </div>

        <div class='demo-containers'>
            <div class='demo-container'>
                <h3 id='init'>init()</h3>
                <code class='demo-container-code'>
                    <div>/*</div>
                    <div> * Jigl.init()</div>
                    <div> *</div>
                    <div> * This function initialized the entire JIGL library, must be called to render all inputs properly and set up events</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>None</strong></div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>None</strong></div>
                    <div> *</div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>$(document).ready(function() {</div>
                    <div>&nbsp;&nbsp;Jigl.init();</div>
                    <div>}</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='initializeContainer'>initializeContainer()</h3>
                <code class='demo-container-code'>
                    <div>/*</div>
                    <div> * Jigl.initializeContainer(containerTag)</div>
                    <div> *</div>
                    <div> * This function takes in a selector of a container or the parent of a group of containers that have not been initialized and sets up events and styles based on it's properties</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>containerTag</strong> - A jQuery selector representing the root of the input (or parent containing inputs) to initialize</div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>None</strong></div>
                    <div> *</div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>Jigl.initializeContainer($('.jigl'));</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='validateContainer'>validateContainer()</h3>
                <code class='demo-container-code'>
                    <div>/*</div>
                    <div> * Jigl.validateContainer(containerTag)</div>
                    <div> *</div>
                    <div> * This function takes in a selector of a container or the parent of a group of containers that need to be tested for validation, like on form submittal</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>containerTag</strong> - A jQuery selector representing the root of the input (or parent containing inputs) to trigger validation</div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>None</strong></div>
                    <div> *</div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>Jigl.validateContainer($('.jigl'));</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='isContainerValid'>isContainerValid()</h3>
                <code class='demo-container-code'>
                    <div>/*</div>
                    <div> * Jigl.isContainerValid(containerTag)</div>
                    <div> *</div>
                    <div> * This function takes in a selector of a container or the parent of a group of containers and returns if it or any are valid</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>containerTag</strong> - A jQuery selector representing the root of the input (or parent containing inputs) to test validation</div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>isValid</strong> - A value indicating if any invalid inputs are in containerTag</div>
                    <div> *</div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>Jigl.isContainerValid($('.jigl'));</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='createClone'>createClone()</h3>
                <code class='demo-container-code'>
                    <div>/*</div>
                    <div> * Jigl.createClone(originalContainerTag, copyDataAndEvents, copyChildDataAndEvents)</div>
                    <div> *</div>
                    <div> * This function takes in a selector of a container or the parent of a group of containers and returns an exact HTML clone of it</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>originalContainerTag</strong> - A jQuery selector representing the root of the input (or parent containing inputs) to be cloned</div>
                    <div> * <strong>copyDataAndEvents</strong> - A boolean value indicating whether or not to copy the data and events of the container</div>
                    <div> * <strong>copyChildDataAndEvents</strong> - A boolean value indicating whether or not to copy the data and events of all the children in the container</div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>newContainerTag</strong> - HTML representing the new clone that was created</div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>Jigl.createClone($('.jigl'), true, false);</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='resetContainer'>resetContainer()</h3>
                <code class='demo-container-code'>
                    <div>/*</div>
                    <div> * Jigl.resetContainer(containerTag)</div>
                    <div> *</div>
                    <div> * This function takes in a selector of a container or the parent of a group of containers and resets all values in the containers</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>containerTag</strong> - A jQuery selector representing the root of the input (or parent containing inputs) to reset</div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>None</strong></div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>Jigl.resetContainer($('.jigl'));</div>
                </code>
            </div>

            <div class='demo-container'>
                <h3 id='jQueryData'>$(...).data() Functions</h3>
                <code class='demo-container-code'>
                    <div style='font-size: 16px;'><strong>$(...).data().val()</strong></div>
                    <div>/*</div>
                    <div> * GETTER</div>
                    <div> * $(...).data().val()</div>
                    <div> *</div>
                    <div> * This function will get the value of the actual HTML input tag for the JIGL input, when using the 'select' or 'autocomplete' inputs this will be the id value</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>None</strong></div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>val</strong> - The value of the HTML input that lies underneath the JIGL input</div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>$('.jigl').data().val();</div>
                    <div>&nbsp;</div>
                    <div>/*</div>
                    <div> * SETTER</div>
                    <div> * $(...).data().val(newValue)</div>
                    <div> *</div>
                    <div> * This function will set the value of the HTML input tag and the JIGL input, when using the 'select' or 'autocomplete' inputs this will affect the id value</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>newValue</strong> - The new value to set the input to</div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>None</strong></div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>$('.jigl').data().val(5);</div>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div style='font-size: 16px;'><strong>$(...).data().text()</strong></div>
                    <div>/*</div>
                    <div> * GETTER</div>
                    <div> * $(...).data().text()</div>
                    <div> *</div>
                    <div> * This function will get the text of the actual HTML input tag for the JIGL input, when using the 'select' or 'autocomplete' inputs this will be the human-readable text</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>None</strong></div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>text</strong> - The text of the HTML input that lies underneath the JIGL input</div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>$('.jigl').data().text();</div>
                    <div>&nbsp;</div>
                    <div>/*</div>
                    <div> * SETTER</div>
                    <div> * $(...).data().text(newText)</div>
                    <div> *</div>
                    <div> * This function will set the text of the HTML input tag and the JIGL input, when using the 'select' or 'autocomplete' inputs this will affect the human-readable text</div>
                    <div> *</div>
                    <div> * Input Parameters:</div>
                    <div> * <strong>newText</strong> - The new text to set the input to</div>
                    <div> *</div>
                    <div> * Output:</div>
                    <div> * <strong>None</strong></div>
                    <div> */</div>
                    <div>&nbsp;</div>
                    <div><strong>Usage:</strong></div>
                    <div>$('.jigl').data().text("Hi There");</div>
                </code>
            </div>
        </div>
    </div>
</div>