<?php

namespace HtmlBuilder\Traits;

use HtmlBuilder\Tags\Basic\BodyTag;
use HtmlBuilder\Tags\Basic\BrTag;
use HtmlBuilder\Tags\Basic\H1Tag;
use HtmlBuilder\Tags\Basic\H2Tag;
use HtmlBuilder\Tags\Basic\H3Tag;
use HtmlBuilder\Tags\Basic\H4Tag;
use HtmlBuilder\Tags\Basic\H5Tag;
use HtmlBuilder\Tags\Basic\H6Tag;
use HtmlBuilder\Tags\Basic\HeadTag;
use HtmlBuilder\Tags\Basic\HrTag;
use HtmlBuilder\Tags\Basic\HtmlTag;
use HtmlBuilder\Tags\Basic\PTag;
use HtmlBuilder\Tags\Basic\TitleTag;
use HtmlBuilder\Tags\Form\ButtonTag;
use HtmlBuilder\Tags\Form\DatalistTag;
use HtmlBuilder\Tags\Form\FieldsetTag;
use HtmlBuilder\Tags\Form\FormTag;
use HtmlBuilder\Tags\Form\InputTag;
use HtmlBuilder\Tags\Form\LabelTag;
use HtmlBuilder\Tags\Form\LegendTag;
use HtmlBuilder\Tags\Form\OptgroupTag;
use HtmlBuilder\Tags\Form\OptionTag;
use HtmlBuilder\Tags\Form\OutputTag;
use HtmlBuilder\Tags\Form\SelectTag;
use HtmlBuilder\Tags\Form\TextAreaTag;
use HtmlBuilder\Tags\Formatting\AbbrTag;
use HtmlBuilder\Tags\Formatting\AddressTag;
use HtmlBuilder\Tags\Formatting\BdiTag;
use HtmlBuilder\Tags\Formatting\BdoTag;
use HtmlBuilder\Tags\Formatting\BlockquoteTag;
use HtmlBuilder\Tags\Formatting\BTag;
use HtmlBuilder\Tags\Formatting\CiteTag;
use HtmlBuilder\Tags\Formatting\CodeTag;
use HtmlBuilder\Tags\Formatting\DelTag;
use HtmlBuilder\Tags\Formatting\DfnTag;
use HtmlBuilder\Tags\Formatting\EmTag;
use HtmlBuilder\Tags\Formatting\InsTag;
use HtmlBuilder\Tags\Formatting\ITag;
use HtmlBuilder\Tags\Formatting\KbdTag;
use HtmlBuilder\Tags\Formatting\MarkTag;
use HtmlBuilder\Tags\Formatting\MeterTag;
use HtmlBuilder\Tags\Formatting\PreTag;
use HtmlBuilder\Tags\Formatting\ProgressTag;
use HtmlBuilder\Tags\Formatting\QTag;
use HtmlBuilder\Tags\Formatting\RpTag;
use HtmlBuilder\Tags\Formatting\RubyTag;
use HtmlBuilder\Tags\Formatting\SampTag;
use HtmlBuilder\Tags\Formatting\SmallTag;
use HtmlBuilder\Tags\Formatting\STag;
use HtmlBuilder\Tags\Formatting\StrongTag;
use HtmlBuilder\Tags\Formatting\SubTag;
use HtmlBuilder\Tags\Formatting\SupTag;
use HtmlBuilder\Tags\Formatting\TemplateTag;
use HtmlBuilder\Tags\Formatting\TimeTag;
use HtmlBuilder\Tags\Formatting\UTag;
use HtmlBuilder\Tags\Formatting\VarTag;
use HtmlBuilder\Tags\Formatting\WbrTag;
use HtmlBuilder\Tags\Frames\IframeTag;
use HtmlBuilder\Tags\Images\AreaTag;
use HtmlBuilder\Tags\Images\CanvasTag;
use HtmlBuilder\Tags\Images\FigcaptionTag;
use HtmlBuilder\Tags\Images\FigureTag;
use HtmlBuilder\Tags\Images\ImgTag;
use HtmlBuilder\Tags\Images\MapTag;
use HtmlBuilder\Tags\Images\PictureTag;
use HtmlBuilder\Tags\Images\SvgTag;
use HtmlBuilder\Tags\Links\ATag;
use HtmlBuilder\Tags\Links\LinkTag;
use HtmlBuilder\Tags\Links\NavTag;
use HtmlBuilder\Tags\Lists\DdTag;
use HtmlBuilder\Tags\Lists\DlTag;
use HtmlBuilder\Tags\Lists\DtTag;
use HtmlBuilder\Tags\Lists\LiTag;
use HtmlBuilder\Tags\Lists\OlTag;
use HtmlBuilder\Tags\Lists\UlTag;
use HtmlBuilder\Tags\Media\AudioTag;
use HtmlBuilder\Tags\Media\SourceTag;
use HtmlBuilder\Tags\Media\TrackTag;
use HtmlBuilder\Tags\Media\VideoTag;
use HtmlBuilder\Tags\Meta\BaseTag;
use HtmlBuilder\Tags\Meta\MetaTag;
use HtmlBuilder\Tags\Programming\EmbedTag;
use HtmlBuilder\Tags\Programming\NoscriptTag;
use HtmlBuilder\Tags\Programming\ObjectTag;
use HtmlBuilder\Tags\Programming\ParamTag;
use HtmlBuilder\Tags\Programming\ScriptTag;
use HtmlBuilder\Tags\Semantics\ArticleTag;
use HtmlBuilder\Tags\Semantics\AsideTag;
use HtmlBuilder\Tags\Semantics\DataTag;
use HtmlBuilder\Tags\Semantics\DetailsTag;
use HtmlBuilder\Tags\Semantics\DialogTag;
use HtmlBuilder\Tags\Semantics\DivTag;
use HtmlBuilder\Tags\Semantics\FooterTag;
use HtmlBuilder\Tags\Semantics\HeaderTag;
use HtmlBuilder\Tags\Semantics\MainTag;
use HtmlBuilder\Tags\Semantics\SectionTag;
use HtmlBuilder\Tags\Semantics\SpanTag;
use HtmlBuilder\Tags\Semantics\StyleTag;
use HtmlBuilder\Tags\Semantics\SummaryTag;
use HtmlBuilder\Tags\Tables\CaptionTag;
use HtmlBuilder\Tags\Tables\ColgroupTag;
use HtmlBuilder\Tags\Tables\ColTag;
use HtmlBuilder\Tags\Tables\TableTag;
use HtmlBuilder\Tags\Tables\TbodyTag;
use HtmlBuilder\Tags\Tables\TdTag;
use HtmlBuilder\Tags\Tables\TfootTag;
use HtmlBuilder\Tags\Tables\TheadTag;
use HtmlBuilder\Tags\Tables\ThTag;
use HtmlBuilder\Tags\Tables\TrTag;

trait CollectsHtmlTags
{
    protected $tagDefinitions = [

        // Basic Tags
        'html' => HtmlTag::class,
        'body' => BodyTag::class,
        'head' => HeadTag::class,
        'title' => TitleTag::class,
        'h1' => H1Tag::class,
        'h2' => H2Tag::class,
        'h3' => H3Tag::class,
        'h4' => H4Tag::class,
        'h5' => H5Tag::class,
        'h6' => H6Tag::class,
        'p' => PTag::class,
        'br' => BrTag::class,
        'hr' => HrTag::class,

        // Formatting
        'abbr' => AbbrTag::class,
        'address' => AddressTag::class,
        'b' => BTag::class,
        'bdi' => BdiTag::class,
        'bdo' => BdoTag::class,
        'blockquote' => BlockquoteTag::class,
        'cite' => CiteTag::class,
        'code' => CodeTag::class,
        'del' => DelTag::class,
        'dfn' => DfnTag::class,
        'em' => EmTag::class,
        'i' => ITag::class,
        'ins' => InsTag::class,
        'kbd' => KbdTag::class,
        'mark' => MarkTag::class,
        'meter' => MeterTag::class,
        'pre' => PreTag::class,
        'progress' => ProgressTag::class,
        'q' => QTag::class,
        'rp' => RpTag::class,
        'rt' => RpTag::class,
        'ruby' => RubyTag::class,
        's' => STag::class,
        'samp' => SampTag::class,
        'small' => SmallTag::class,
        'strong' => StrongTag::class,
        'sub' => SubTag::class,
        'sup' => SupTag::class,
        'template' => TemplateTag::class,
        'time' => TimeTag::class,
        'u' => UTag::class,
        'var' => VarTag::class,
        'wbr' => WbrTag::class,

        // Forms
        'form' => FormTag::class,
        'input' => InputTag::class,
        'textarea' => TextAreaTag::class,
        'button' => ButtonTag::class,
        'select' => SelectTag::class,
        'optgroup' => OptgroupTag::class,
        'option' => OptionTag::class,
        'label' => LabelTag::class,
        'fieldset' => FieldsetTag::class,
        'legend' => LegendTag::class,
        'datalist' => DatalistTag::class,
        'output' => OutputTag::class,

        // frames
        'iframe' => IframeTag::class,

        // Images
        'img' => ImgTag::class,
        'map' => MapTag::class,
        'area' => AreaTag::class,
        'canvas' => CanvasTag::class,
        'figcaption' => FigcaptionTag::class,
        'figure' => FigureTag::class,
        'picture' => PictureTag::class,
        'svg' => SvgTag::class,

        'audio' => AudioTag::class,
        'source' => SourceTag::class,
        'track' => TrackTag::class,
        'video' => VideoTag::class,

        // Links
        'a' => ATag::class,
        'link' => LinkTag::class,
        'nav' => NavTag::class,

        // Lists
        'ul' => UlTag::class,
        'ol' => OlTag::class,
        'li' => LiTag::class,
        'dl' => DlTag::class,
        'dt' => DtTag::class,
        'dd' => DdTag::class,

        // Tables
        'table' => TableTag::class,
        'caption' => CaptionTag::class,
        'th' => ThTag::class,
        'tr' => TrTag::class,
        'td' => TdTag::class,
        'thead' => TheadTag::class,
        'tbody' => TbodyTag::class,
        'tfoot' => TfootTag::class,
        'col' => ColTag::class,
        'colgroup' => ColgroupTag::class,

        // Semantics
        'style' => StyleTag::class,
        'div' => DivTag::class,
        'span' => SpanTag::class,
        'header' => HeaderTag::class,
        'footer' => FooterTag::class,
        'main' => MainTag::class,
        'section' => SectionTag::class,
        'article' => ArticleTag::class,
        'aside' => AsideTag::class,
        'details' => DetailsTag::class,
        'dialog' => DialogTag::class,
        'summary' => SummaryTag::class,
        'data' => DataTag::class,

        // Meta
        'meta' => MetaTag::class,
        'base' => BaseTag::class,

        // Programming
        'script' => ScriptTag::class,
        'noscript' => NoscriptTag::class,
        'embed' => EmbedTag::class,
        'object' => ObjectTag::class,
        'param' => ParamTag::class,
    ];
}