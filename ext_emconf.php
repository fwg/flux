<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "flux".
 *
 * Auto generated 25-03-2014 19:12
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Flux: Fluid FlexForms',
	'description' => 'Backend form and frontend content rendering assistance API with focus on productivity.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '7.1.0',
	'dependencies' => 'cms,extbase,fluid',
	'conflicts' => '',
	'priority' => 'top',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'FluidTYPO3 Team',
	'author_email' => 'claus@namelesscoder.net',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.1.0-6.3.99',
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:292:{s:20:"class.ext_update.php";s:4:"5fa9";s:13:"composer.json";s:4:"4c77";s:15:"CONTRIBUTING.md";s:4:"55cf";s:21:"ext_conf_template.txt";s:4:"bb24";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"4bdd";s:14:"ext_tables.php";s:4:"2614";s:14:"ext_tables.sql";s:4:"9dbb";s:9:"README.md";s:4:"9b5d";s:22:"Build/ImportSchema.sql";s:4:"97fa";s:28:"Build/LocalConfiguration.php";s:4:"3083";s:23:"Build/PackageStates.php";s:4:"315e";s:16:"Classes/Core.php";s:4:"3fbd";s:16:"Classes/Form.php";s:4:"7d0d";s:42:"Classes/Backend/AreaListItemsProcessor.php";s:4:"2e4e";s:35:"Classes/Backend/DynamicFlexForm.php";s:4:"ab46";s:27:"Classes/Backend/Preview.php";s:4:"9e2a";s:51:"Classes/Backend/TableConfigurationPostProcessor.php";s:4:"7224";s:27:"Classes/Backend/TceMain.php";s:4:"80ad";s:38:"Classes/Backend/TypoScriptTemplate.php";s:4:"23a6";s:53:"Classes/Configuration/BackendConfigurationManager.php";s:4:"b913";s:46:"Classes/Configuration/ConfigurationManager.php";s:4:"2535";s:45:"Classes/Controller/AbstractFluxController.php";s:4:"ee07";s:38:"Classes/Form/AbstractFormComponent.php";s:4:"a175";s:38:"Classes/Form/AbstractFormContainer.php";s:4:"fbe6";s:34:"Classes/Form/AbstractFormField.php";s:4:"f6ea";s:40:"Classes/Form/AbstractInlineFormField.php";s:4:"cf06";s:44:"Classes/Form/AbstractMultiValueFormField.php";s:4:"b78a";s:42:"Classes/Form/AbstractRelationFormField.php";s:4:"c985";s:31:"Classes/Form/AbstractWizard.php";s:4:"3459";s:35:"Classes/Form/ContainerInterface.php";s:4:"e893";s:40:"Classes/Form/FieldContainerInterface.php";s:4:"d2f3";s:31:"Classes/Form/FieldInterface.php";s:4:"ec57";s:30:"Classes/Form/FormInterface.php";s:4:"1672";s:41:"Classes/Form/MultiValueFieldInterface.php";s:4:"3eb8";s:39:"Classes/Form/RelationFieldInterface.php";s:4:"dcb2";s:32:"Classes/Form/WizardInterface.php";s:4:"134b";s:33:"Classes/Form/Container/Column.php";s:4:"36b2";s:36:"Classes/Form/Container/Container.php";s:4:"9dbb";s:34:"Classes/Form/Container/Content.php";s:4:"3561";s:31:"Classes/Form/Container/Grid.php";s:4:"696c";s:33:"Classes/Form/Container/Object.php";s:4:"7619";s:30:"Classes/Form/Container/Row.php";s:4:"3009";s:34:"Classes/Form/Container/Section.php";s:4:"1427";s:32:"Classes/Form/Container/Sheet.php";s:4:"4ba1";s:31:"Classes/Form/Field/Checkbox.php";s:4:"0abc";s:40:"Classes/Form/Field/ControllerActions.php";s:4:"a755";s:29:"Classes/Form/Field/Custom.php";s:4:"bbbe";s:31:"Classes/Form/Field/DateTime.php";s:4:"f67b";s:27:"Classes/Form/Field/File.php";s:4:"0690";s:27:"Classes/Form/Field/Flex.php";s:4:"6903";s:29:"Classes/Form/Field/Inline.php";s:4:"3344";s:28:"Classes/Form/Field/Input.php";s:4:"cc65";s:27:"Classes/Form/Field/None.php";s:4:"6328";s:34:"Classes/Form/Field/Passthrough.php";s:4:"76b0";s:31:"Classes/Form/Field/Relation.php";s:4:"192b";s:29:"Classes/Form/Field/Select.php";s:4:"1952";s:27:"Classes/Form/Field/Text.php";s:4:"743b";s:27:"Classes/Form/Field/Tree.php";s:4:"dc1f";s:35:"Classes/Form/Field/UserFunction.php";s:4:"0a5c";s:33:"Classes/Form/Field/Inline/Fal.php";s:4:"9768";s:27:"Classes/Form/Wizard/Add.php";s:4:"0652";s:35:"Classes/Form/Wizard/ColorPicker.php";s:4:"73db";s:28:"Classes/Form/Wizard/Edit.php";s:4:"2eec";s:28:"Classes/Form/Wizard/Link.php";s:4:"6cd2";s:34:"Classes/Form/Wizard/ListWizard.php";s:4:"0567";s:30:"Classes/Form/Wizard/Select.php";s:4:"32e0";s:30:"Classes/Form/Wizard/Slider.php";s:4:"f456";s:31:"Classes/Form/Wizard/Suggest.php";s:4:"59c1";s:43:"Classes/Hooks/WizardItemsHookSubscriber.php";s:4:"75b2";s:33:"Classes/Outlet/AbstractOutlet.php";s:4:"38f3";s:28:"Classes/Outlet/Exception.php";s:4:"44fd";s:34:"Classes/Outlet/OutletInterface.php";s:4:"d14a";s:33:"Classes/Outlet/StandardOutlet.php";s:4:"4add";s:36:"Classes/Outlet/Pipe/AbstractPipe.php";s:4:"1f58";s:38:"Classes/Outlet/Pipe/ControllerPipe.php";s:4:"7f87";s:33:"Classes/Outlet/Pipe/EmailPipe.php";s:4:"1126";s:33:"Classes/Outlet/Pipe/Exception.php";s:4:"e5c5";s:40:"Classes/Outlet/Pipe/FlashMessagePipe.php";s:4:"1947";s:37:"Classes/Outlet/Pipe/PipeInterface.php";s:4:"d809";s:36:"Classes/Outlet/Pipe/StandardPipe.php";s:4:"12cf";s:41:"Classes/Outlet/Pipe/TypeConverterPipe.php";s:4:"e58d";s:37:"Classes/Provider/AbstractProvider.php";s:4:"d8cf";s:36:"Classes/Provider/ContentProvider.php";s:4:"adcf";s:29:"Classes/Provider/Provider.php";s:4:"ab8c";s:38:"Classes/Provider/ProviderInterface.php";s:4:"62a8";s:34:"Classes/Service/ContentService.php";s:4:"8406";s:31:"Classes/Service/FluxService.php";s:4:"fcb0";s:41:"Classes/UserFunction/ClearValueWizard.php";s:4:"1d1f";s:38:"Classes/UserFunction/ErrorReporter.php";s:4:"d00e";s:35:"Classes/UserFunction/HtmlOutput.php";s:4:"31bd";s:33:"Classes/UserFunction/NoFields.php";s:4:"3d6a";s:36:"Classes/UserFunction/NoSelection.php";s:4:"d3a9";s:35:"Classes/UserFunction/NoTemplate.php";s:4:"4c46";s:37:"Classes/Utility/AnnotationUtility.php";s:4:"41a2";s:36:"Classes/Utility/ClipBoardUtility.php";s:4:"869e";s:42:"Classes/Utility/ExtensionNamingUtility.php";s:4:"9a61";s:40:"Classes/Utility/MiscellaneousUtility.php";s:4:"7c48";s:31:"Classes/Utility/PathUtility.php";s:4:"4d5b";s:41:"Classes/Utility/RecursiveArrayUtility.php";s:4:"f8a9";s:34:"Classes/Utility/ResolveUtility.php";s:4:"af69";s:34:"Classes/Utility/VersionUtility.php";s:4:"818d";s:36:"Classes/View/ExposedTemplateView.php";s:4:"e45c";s:46:"Classes/ViewHelpers/AbstractFormViewHelper.php";s:4:"d8d4";s:38:"Classes/ViewHelpers/FormViewHelper.php";s:4:"9e84";s:38:"Classes/ViewHelpers/GridViewHelper.php";s:4:"744b";s:45:"Classes/ViewHelpers/IsCollapsedViewHelper.php";s:4:"2006";s:42:"Classes/ViewHelpers/VariableViewHelper.php";s:4:"41a6";s:48:"Classes/ViewHelpers/Be/ContentAreaViewHelper.php";s:4:"035d";s:51:"Classes/ViewHelpers/Be/ContentElementViewHelper.php";s:4:"8d07";s:53:"Classes/ViewHelpers/Be/Link/Content/NewViewHelper.php";s:4:"d107";s:55:"Classes/ViewHelpers/Be/Link/Content/PasteViewHelper.php";s:4:"e492";s:45:"Classes/ViewHelpers/Content/GetViewHelper.php";s:4:"5239";s:48:"Classes/ViewHelpers/Content/RenderViewHelper.php";s:4:"8fce";s:53:"Classes/ViewHelpers/Field/AbstractFieldViewHelper.php";s:4:"2313";s:59:"Classes/ViewHelpers/Field/AbstractInlineFieldViewHelper.php";s:4:"8af9";s:63:"Classes/ViewHelpers/Field/AbstractMultiValueFieldViewHelper.php";s:4:"220b";s:61:"Classes/ViewHelpers/Field/AbstractRelationFieldViewHelper.php";s:4:"6bd5";s:48:"Classes/ViewHelpers/Field/CheckboxViewHelper.php";s:4:"bbf5";s:57:"Classes/ViewHelpers/Field/ControllerActionsViewHelper.php";s:4:"4f58";s:46:"Classes/ViewHelpers/Field/CustomViewHelper.php";s:4:"54de";s:44:"Classes/ViewHelpers/Field/FileViewHelper.php";s:4:"4d70";s:46:"Classes/ViewHelpers/Field/InlineViewHelper.php";s:4:"587d";s:45:"Classes/ViewHelpers/Field/InputViewHelper.php";s:4:"2664";s:44:"Classes/ViewHelpers/Field/NoneViewHelper.php";s:4:"6a86";s:48:"Classes/ViewHelpers/Field/RelationViewHelper.php";s:4:"5583";s:46:"Classes/ViewHelpers/Field/SelectViewHelper.php";s:4:"9681";s:44:"Classes/ViewHelpers/Field/TextViewHelper.php";s:4:"d27b";s:44:"Classes/ViewHelpers/Field/TreeViewHelper.php";s:4:"0078";s:48:"Classes/ViewHelpers/Field/UserFuncViewHelper.php";s:4:"a332";s:50:"Classes/ViewHelpers/Field/Inline/FalViewHelper.php";s:4:"a31a";s:48:"Classes/ViewHelpers/Form/ContainerViewHelper.php";s:4:"8e90";s:46:"Classes/ViewHelpers/Form/ContentViewHelper.php";s:4:"ad75";s:43:"Classes/ViewHelpers/Form/DataViewHelper.php";s:4:"fba0";s:45:"Classes/ViewHelpers/Form/ObjectViewHelper.php";s:4:"81aa";s:46:"Classes/ViewHelpers/Form/SectionViewHelper.php";s:4:"1ba0";s:44:"Classes/ViewHelpers/Form/SheetViewHelper.php";s:4:"8df6";s:47:"Classes/ViewHelpers/Form/VariableViewHelper.php";s:4:"2cfa";s:45:"Classes/ViewHelpers/Grid/ColumnViewHelper.php";s:4:"a1d3";s:42:"Classes/ViewHelpers/Grid/RowViewHelper.php";s:4:"9b31";s:45:"Classes/ViewHelpers/Widget/GridViewHelper.php";s:4:"c172";s:56:"Classes/ViewHelpers/Widget/Controller/GridController.php";s:4:"cddd";s:55:"Classes/ViewHelpers/Wizard/AbstractWizardViewHelper.php";s:4:"608c";s:44:"Classes/ViewHelpers/Wizard/AddViewHelper.php";s:4:"cbad";s:52:"Classes/ViewHelpers/Wizard/ColorPickerViewHelper.php";s:4:"ec15";s:45:"Classes/ViewHelpers/Wizard/EditViewHelper.php";s:4:"21e2";s:45:"Classes/ViewHelpers/Wizard/LinkViewHelper.php";s:4:"dc7a";s:45:"Classes/ViewHelpers/Wizard/ListViewHelper.php";s:4:"d00d";s:47:"Classes/ViewHelpers/Wizard/SelectViewHelper.php";s:4:"3e4b";s:47:"Classes/ViewHelpers/Wizard/SliderViewHelper.php";s:4:"d8eb";s:48:"Classes/ViewHelpers/Wizard/SuggestViewHelper.php";s:4:"d5bd";s:33:"Documentation/ComplexityChart.png";s:4:"018c";s:30:"Documentation/PyramidChart.png";s:4:"92b5";s:33:"Migrations/Code/ClassAliasMap.php";s:4:"ca6d";s:40:"Resources/Private/Language/locallang.xlf";s:4:"ef2c";s:38:"Resources/Private/Layouts/Default.html";s:4:"1cc2";s:69:"Resources/Private/Templates/ViewHelpers/Widget/Grid/GridElements.html";s:4:"60f0";s:62:"Resources/Private/Templates/ViewHelpers/Widget/Grid/Index.html";s:4:"934a";s:63:"Resources/Private/Templates/ViewHelpers/Widget/Grid/Legacy.html";s:4:"783e";s:37:"Resources/Public/Icons/ColorWheel.png";s:4:"0647";s:33:"Resources/Public/Icons/Plugin.png";s:4:"50ed";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:29:"Resources/Public/css/grid.css";s:4:"14a6";s:17:"Tests/phpunit.xml";s:4:"50f9";s:44:"Tests/Fixtures/Classes/ContentController.php";s:4:"74ff";s:53:"Tests/Fixtures/Classes/DummyConfigurationProvider.php";s:4:"faec";s:37:"Tests/Fixtures/Classes/DummyModel.php";s:4:"e6a4";s:42:"Tests/Fixtures/Classes/DummyRepository.php";s:4:"27c1";s:55:"Tests/Fixtures/Classes/InvalidConfigurationProvider.php";s:4:"5be6";s:31:"Tests/Fixtures/Data/Records.php";s:4:"b023";s:27:"Tests/Fixtures/Data/Xml.php";s:4:"9c4b";s:44:"Tests/Fixtures/Data/TypoScript/constants.txt";s:4:"a0d0";s:40:"Tests/Fixtures/Data/TypoScript/setup.txt";s:4:"a2dc";s:43:"Tests/Fixtures/Partials/FormComponents.html";s:4:"03b1";s:47:"Tests/Fixtures/Templates/AbsolutelyMinimal.html";s:4:"4db5";s:39:"Tests/Fixtures/Templates/BasicGrid.html";s:4:"7489";s:43:"Tests/Fixtures/Templates/CollidingGrid.html";s:4:"02d2";s:46:"Tests/Fixtures/Templates/CompactToggledOn.html";s:4:"21bb";s:43:"Tests/Fixtures/Templates/CustomSection.html";s:4:"8bf8";s:38:"Tests/Fixtures/Templates/DualGrid.html";s:4:"8076";s:42:"Tests/Fixtures/Templates/EmptyPreview.html";s:4:"618a";s:36:"Tests/Fixtures/Templates/Sheets.html";s:4:"9e76";s:41:"Tests/Fixtures/Templates/UsesPartial.html";s:4:"65b9";s:41:"Tests/Fixtures/Templates/WithoutForm.html";s:4:"ca96";s:31:"Tests/Unit/AbstractTestCase.php";s:4:"ddeb";s:23:"Tests/Unit/CoreTest.php";s:4:"a3a0";s:23:"Tests/Unit/FormTest.php";s:4:"824a";s:23:"Tests/Unit/GridTest.php";s:4:"3e73";s:42:"Tests/Unit/Backend/DynamicFlexFormTest.php";s:4:"a66f";s:34:"Tests/Unit/Backend/PreviewTest.php";s:4:"3c10";s:58:"Tests/Unit/Backend/TableConfigurationPostProcessorTest.php";s:4:"7cf0";s:34:"Tests/Unit/Backend/TceMainTest.php";s:4:"60bc";s:45:"Tests/Unit/Backend/TypoScriptTemplateTest.php";s:4:"1a20";s:56:"Tests/Unit/Controller/AbstractFluxControllerTestCase.php";s:4:"da34";s:47:"Tests/Unit/Controller/ContentControllerTest.php";s:4:"a0dc";s:36:"Tests/Unit/Form/AbstractFormTest.php";s:4:"f9e0";s:51:"Tests/Unit/Form/Container/AbstractContainerTest.php";s:4:"6978";s:40:"Tests/Unit/Form/Container/ColumnTest.php";s:4:"8e60";s:43:"Tests/Unit/Form/Container/ContainerTest.php";s:4:"316f";s:41:"Tests/Unit/Form/Container/ContentTest.php";s:4:"1430";s:38:"Tests/Unit/Form/Container/GridTest.php";s:4:"f8a2";s:40:"Tests/Unit/Form/Container/ObjectTest.php";s:4:"cdfc";s:37:"Tests/Unit/Form/Container/RowTest.php";s:4:"cf56";s:41:"Tests/Unit/Form/Container/SectionTest.php";s:4:"f54b";s:39:"Tests/Unit/Form/Container/SheetTest.php";s:4:"aba8";s:43:"Tests/Unit/Form/Field/AbstractFieldTest.php";s:4:"decd";s:38:"Tests/Unit/Form/Field/CheckboxTest.php";s:4:"ca66";s:47:"Tests/Unit/Form/Field/ControllerActionsTest.php";s:4:"112f";s:36:"Tests/Unit/Form/Field/CustomTest.php";s:4:"2e7c";s:38:"Tests/Unit/Form/Field/DateTimeTest.php";s:4:"20e9";s:34:"Tests/Unit/Form/Field/FileTest.php";s:4:"c2de";s:34:"Tests/Unit/Form/Field/FlexTest.php";s:4:"6666";s:36:"Tests/Unit/Form/Field/InlineTest.php";s:4:"94bf";s:35:"Tests/Unit/Form/Field/InputTest.php";s:4:"2c7a";s:34:"Tests/Unit/Form/Field/NoneTest.php";s:4:"a673";s:41:"Tests/Unit/Form/Field/PassthroughTest.php";s:4:"b774";s:38:"Tests/Unit/Form/Field/RelationTest.php";s:4:"343e";s:36:"Tests/Unit/Form/Field/SelectTest.php";s:4:"9464";s:34:"Tests/Unit/Form/Field/TextTest.php";s:4:"cd73";s:34:"Tests/Unit/Form/Field/TreeTest.php";s:4:"d502";s:42:"Tests/Unit/Form/Field/UserFunctionTest.php";s:4:"4e6d";s:40:"Tests/Unit/Form/Field/Inline/FalTest.php";s:4:"8c99";s:45:"Tests/Unit/Form/Wizard/AbstractWizardTest.php";s:4:"f9fa";s:34:"Tests/Unit/Form/Wizard/AddTest.php";s:4:"ee0e";s:42:"Tests/Unit/Form/Wizard/ColorPickerTest.php";s:4:"a202";s:35:"Tests/Unit/Form/Wizard/EditTest.php";s:4:"318c";s:35:"Tests/Unit/Form/Wizard/LinkTest.php";s:4:"1a2b";s:41:"Tests/Unit/Form/Wizard/ListWizardTest.php";s:4:"85ca";s:37:"Tests/Unit/Form/Wizard/SelectTest.php";s:4:"c69b";s:37:"Tests/Unit/Form/Wizard/SliderTest.php";s:4:"c5b5";s:38:"Tests/Unit/Form/Wizard/SuggestTest.php";s:4:"ef7d";s:44:"Tests/Unit/Outlet/AbstractOutletTestCase.php";s:4:"adba";s:40:"Tests/Unit/Outlet/StandardOutletTest.php";s:4:"adc8";s:47:"Tests/Unit/Outlet/Pipe/AbstractPipeTestCase.php";s:4:"0504";s:45:"Tests/Unit/Outlet/Pipe/ControllerPipeTest.php";s:4:"a940";s:40:"Tests/Unit/Outlet/Pipe/EmailPipeTest.php";s:4:"04f5";s:47:"Tests/Unit/Outlet/Pipe/FlashMessagePipeTest.php";s:4:"d485";s:43:"Tests/Unit/Outlet/Pipe/StandardPipeTest.php";s:4:"d45d";s:48:"Tests/Unit/Outlet/Pipe/TypeConverterPipeTest.php";s:4:"e541";s:44:"Tests/Unit/Provider/AbstractProviderTest.php";s:4:"0012";s:43:"Tests/Unit/Provider/ContentProviderTest.php";s:4:"406d";s:36:"Tests/Unit/Provider/ProviderTest.php";s:4:"f910";s:41:"Tests/Unit/Service/ContentServiceTest.php";s:4:"bcc6";s:38:"Tests/Unit/Service/FluxServiceTest.php";s:4:"93cc";s:52:"Tests/Unit/UserFunction/AbstractUserFunctionTest.php";s:4:"cc78";s:48:"Tests/Unit/UserFunction/ClearValueWizardTest.php";s:4:"a791";s:45:"Tests/Unit/UserFunction/ErrorReporterTest.php";s:4:"cec9";s:42:"Tests/Unit/UserFunction/HtmlOutputTest.php";s:4:"68ce";s:40:"Tests/Unit/UserFunction/NoFieldsTest.php";s:4:"50a0";s:43:"Tests/Unit/UserFunction/NoSelectionTest.php";s:4:"2c7a";s:42:"Tests/Unit/UserFunction/NoTemplateTest.php";s:4:"267e";s:44:"Tests/Unit/Utility/AnnotationUtilityTest.php";s:4:"b89b";s:49:"Tests/Unit/Utility/ExtensionNamingUtilityTest.php";s:4:"ff7a";s:47:"Tests/Unit/Utility/MiscellaneousUtilityTest.php";s:4:"3b9e";s:48:"Tests/Unit/Utility/RecursiveArrayUtilityTest.php";s:4:"e073";s:41:"Tests/Unit/Utility/ResolveUtilityTest.php";s:4:"b6a3";s:41:"Tests/Unit/Utility/VersionUtilityTest.php";s:4:"c5c7";s:43:"Tests/Unit/View/ExposedTemplateViewTest.php";s:4:"c6c5";s:57:"Tests/Unit/ViewHelpers/AbstractFormViewHelperTestCase.php";s:4:"35ac";s:53:"Tests/Unit/ViewHelpers/AbstractViewHelperTestCase.php";s:4:"f393";s:49:"Tests/Unit/ViewHelpers/VariableViewHelperTest.php";s:4:"d6c2";s:58:"Tests/Unit/ViewHelpers/Be/ContentElementViewHelperTest.php";s:4:"5b41";s:60:"Tests/Unit/ViewHelpers/Be/Link/Content/NewViewHelperTest.php";s:4:"749a";s:62:"Tests/Unit/ViewHelpers/Be/Link/Content/PasteViewHelperTest.php";s:4:"14a2";s:52:"Tests/Unit/ViewHelpers/Content/GetViewHelperTest.php";s:4:"9c3e";s:55:"Tests/Unit/ViewHelpers/Content/RenderViewHelperTest.php";s:4:"a270";s:64:"Tests/Unit/ViewHelpers/Field/AbstractFieldViewHelperTestCase.php";s:4:"663b";s:55:"Tests/Unit/ViewHelpers/Field/CheckboxViewHelperTest.php";s:4:"fac2";s:64:"Tests/Unit/ViewHelpers/Field/ControllerActionsViewHelperTest.php";s:4:"8e29";s:53:"Tests/Unit/ViewHelpers/Field/CustomViewHelperTest.php";s:4:"c0c1";s:51:"Tests/Unit/ViewHelpers/Field/FileViewHelperTest.php";s:4:"8c93";s:53:"Tests/Unit/ViewHelpers/Field/InlineViewHelperTest.php";s:4:"3920";s:51:"Tests/Unit/ViewHelpers/Field/NoneViewHelperTest.php";s:4:"1850";s:55:"Tests/Unit/ViewHelpers/Field/RelationViewHelperTest.php";s:4:"8dbc";s:53:"Tests/Unit/ViewHelpers/Field/SelectViewHelperTest.php";s:4:"43f9";s:51:"Tests/Unit/ViewHelpers/Field/TextViewHelperTest.php";s:4:"445a";s:51:"Tests/Unit/ViewHelpers/Field/TreeViewHelperTest.php";s:4:"16a8";s:57:"Tests/Unit/ViewHelpers/Field/Inline/FalViewHelperTest.php";s:4:"ae47";s:55:"Tests/Unit/ViewHelpers/Form/ContainerViewHelperTest.php";s:4:"19b2";s:50:"Tests/Unit/ViewHelpers/Form/DataViewHelperTest.php";s:4:"cf74";s:52:"Tests/Unit/ViewHelpers/Form/ObjectViewHelperTest.php";s:4:"126f";s:53:"Tests/Unit/ViewHelpers/Form/SectionViewHelperTest.php";s:4:"1b6f";s:52:"Tests/Unit/ViewHelpers/Widget/GridViewHelperTest.php";s:4:"384a";s:66:"Tests/Unit/ViewHelpers/Wizard/AbstractWizardViewHelperTestCase.php";s:4:"81f0";s:51:"Tests/Unit/ViewHelpers/Wizard/AddViewHelperTest.php";s:4:"3678";s:59:"Tests/Unit/ViewHelpers/Wizard/ColorPickerViewHelperTest.php";s:4:"c244";s:52:"Tests/Unit/ViewHelpers/Wizard/EditViewHelperTest.php";s:4:"64c1";s:52:"Tests/Unit/ViewHelpers/Wizard/LinkViewHelperTest.php";s:4:"0f48";s:52:"Tests/Unit/ViewHelpers/Wizard/ListViewHelperTest.php";s:4:"9e9e";s:54:"Tests/Unit/ViewHelpers/Wizard/SelectViewHelperTest.php";s:4:"2df3";s:54:"Tests/Unit/ViewHelpers/Wizard/SliderViewHelperTest.php";s:4:"3160";s:55:"Tests/Unit/ViewHelpers/Wizard/SuggestViewHelperTest.php";s:4:"d5f4";}',
	'suggests' => array(
	),
);

?>