<?php

namespace AragornYang\Onix\CodeLists;

class CodeList23ExtentType extends CodeList
{
    public const KEY = 'ExtentType';

    protected const MAPPING = [
        /* The highest-numbered page in a single numbered sequence of main content, usually the highest Arabic-numbered page in a book;
					or, for books without page numbers or (rarely) with multiple numbered sequences of main content, the total number of pages
					that carry the main content of the book. Note that this may include numbered but otherwise blank pages (eg pages inserted
					to ensure chapters start on a recto page) and may exclude unnumbered (but contentful) pages such as those in inserts/plate
					sections. It should exclude pages of back matter (eg any index) even when their numbering sequence continues from the main
					content. Either this or the Content Page count is the preferred page count for most books for the general reader. For books
					with substantial front and/or back matter, include also Front matter (03) and Back matter (04) page counts, or Total numbered
					pages (05). For books with inserts (plate sections), also include Total unnumbered insert page count whenever possible */
        "00" => "Main content page count",
        // Number of words of natural language text
        "02" => "Number of words",
        /* The total number of numbered (usually Roman-numbered) pages that precede the main content of a book. This usually consists
					of various title and imprint pages, table of contents, an introduction, preface, foreword, etc */
        "03" => "Front matter page count",
        /* The total number of numbered (often Roman-numbered) pages that follow the main content of a book. This usually consists of
					an afterword, appendices, endnotes, index, etc. It excludes extracts or ‘teaser’ material from other works, and blank (or
					advertising) pages that are present only for convenience of printing and binding */
        "04" => "Back matter page count",
        /* The sum of all Roman- and Arabic-numbered pages. Note that this may include numbered but otherwise blank pages (eg pages inserted
					to ensure chapters start on a recto page) and may exclude unnumbered (but contentful) pages such as those in inserts/plate
					sections. It is the sum of the main content (00), front matter (03) and back matter (04) page counts */
        "05" => "Total numbered pages",
        /* The total number of pages in a book, including unnumbered pages, front matter, back matter, etc. This includes any extracts
					or ‘teaser’ material from other works, and blank pages at the back that carry no content and are present only for convenience
					of printing and binding */
        "06" => "Production page count",
        /* The total number of pages of the book counting the cover as page 1. This page count type should be used only for digital publications
					delivered with fixed pagination */
        "07" => "Absolute page count",
        /* The total number of pages (equivalent to the Content page count) in the print counterpart of a digital product delivered without
					fixed pagination */
        "08" => "Number of pages in print counterpart",
        // Total duration in time, expressed in the specified extent unit. This is the ‘running time’ equivalent of codes 05 or 11
        "09" => "Duration",
        /* An estimate of the number of ‘pages’ in a digital product delivered without fixed pagination, and with no print counterpart,
					given as an indication of the size of the work. Equivalent to code 08, but for exclusively digital products */
        "10" => "Notional number of pages in digital product",
        /* The sum of all Roman- and Arabic-numbered and contentful unnumbered pages. Sum of page counts with codes 00, 03, 04 and 12,
					and also the sum of 05 and 12 */
        "11" => "Content page count",
        /* The total number of unnumbered pages with content inserted within the main content of a book – for example inserts/plate sections
					that are not numbered */
        "12" => "Total unnumbered insert page count",
        /* Duration in time, expressed in the specified extent units, of introductory matter. This is the ‘running time’ equivalent of
					code 03, and comprises any significant amount of running time represented by announcements, titles, introduction or other
					material prefacing the main content */
        "13" => "Duration of introductory matter",
        /* Duration in time, expressed in the specified extent units, of the main content. This is the ‘running time’ equivalent of code
					00, and excludes time represented by announcements, titles, introduction or other prefatory material or ‘back matter’ */
        "14" => "Duration of main content",
        // The size of a digital file, expressed in the specified extent unit
        "22" => "Filesize",
    ];
}