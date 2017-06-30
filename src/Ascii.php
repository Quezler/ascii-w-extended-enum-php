<?php

namespace Quezler\AsciiExtended;

class Ascii {
    const null_character                             = "\u{0000}"; //  
    const start_of_heading                           = "\u{0001}"; // 
    const start_of_text                              = "\u{0002}"; // 
    const end_of_text_character                      = "\u{0003}"; // 
    const end_of_transmission_character              = "\u{0004}"; // 
    const enquiry_character                          = "\u{0005}"; // 
    const acknowledge_character                      = "\u{0006}"; // 
    const bell_character                             = "\u{0007}"; // 
    const backspace                                  = "\u{0008}"; // 
    const horizontal_tab                             = "\u{0009}"; // 	
    const line_feed                                  = "\u{000a}"; // 

    const vertical_tab                               = "\u{000b}"; // 
    const form_feed                                  = "\u{000c}"; // 
    const carriage_return                            = "\u{000d}"; // 
    const shift_out                                  = "\u{000e}"; // 
    const shift_in                                   = "\u{000f}"; // 
    const data_link_escape                           = "\u{0010}"; // 
    const device_control_1                           = "\u{0011}"; // 
    const device_control_2                           = "\u{0012}"; // 
    const device_control_3                           = "\u{0013}"; // 
    const device_control_4                           = "\u{0014}"; // 
    const negative_acknowledge_character             = "\u{0015}"; // 
    const synchronous_idle                           = "\u{0016}"; // 
    const end_of_transmission_block                  = "\u{0017}"; // 
    const can                                        = "\u{0018}"; // 
    const end_of_medium                              = "\u{0019}"; // 
    const substitute_character                       = "\u{001a}"; // 
    const escape_character                           = "\u{001b}"; // 
    const file_separator                             = "\u{001c}"; // 
    const group_separator                            = "\u{001d}"; // 
    const record_separator                           = "\u{001e}"; // 
    const unit_separator                             = "\u{001f}"; // 
    const space                                      = "\u{0020}"; //  
    const delete                                     = "\u{007f}"; // 
    const padding_character                          = "\u{0080}"; // 
    const high_octet_preset                          = "\u{0081}"; // 
    const break_permitted_here                       = "\u{0082}"; // 
    const no_break_here                              = "\u{0083}"; // 
    const index                                      = "\u{0084}"; // 
    const next_line                                  = "\u{0085}"; // 
    const start_of_selected_area                     = "\u{0086}"; // 
    const end_of_selected_area                       = "\u{0087}"; // 
    const character_tabulation_set                   = "\u{0088}"; // 
    const character_tabulation_with_justification    = "\u{0089}"; // 
    const line_tabulation_set                        = "\u{008a}"; // 
    const partial_line_forward                       = "\u{008b}"; // 
    const partial_line_backward                      = "\u{008c}"; // 
    const reverse_line_feed                          = "\u{008d}"; // 
    const single_shift_two                           = "\u{008e}"; // 
    const single_shift_three                         = "\u{008f}"; // 
    const device_control_string                      = "\u{0090}"; // 
    const private_use_1                              = "\u{0091}"; // 
    const private_use_2                              = "\u{0092}"; // 
    const set_transmit_state                         = "\u{0093}"; // 
    const cch                                        = "\u{0094}"; // 
    const message_waiting                            = "\u{0095}"; // 
    const start_of_protected_area                    = "\u{0096}"; // 
    const end_of_protected_area                      = "\u{0097}"; // 
    const start_of_string                            = "\u{0098}"; // 
    const single_graphic_character_introducer        = "\u{0099}"; // 
    const single_character_intro_introducer          = "\u{009a}"; // 
    const control_sequence_introducer                = "\u{009b}"; // 
    const string_terminator                          = "\u{009c}"; // 
    const operating_system_command                   = "\u{009d}"; // 
    const private_message                            = "\u{009e}"; // 
    const application_program_command                = "\u{009f}"; // 
    const exclamation_mark                           = "\u{0021}"; // !
    const quotation_mark                             = "\u{0022}"; // "
    const number_sign                                = "\u{0023}"; // #
    const hashtag                                    = self::number_sign;
    const octothorpe                                 = self::number_sign;
    const sharp                                      = self::number_sign;
    const dollar_sign                                = "\u{0024}"; // $
    const percent_sign                               = "\u{0025}"; // %
    const ampersand                                  = "\u{0026}"; // &
    const apostrophe                                 = "\u{0027}"; // '
    const left_parenthesis                           = "\u{0028}"; // (
    const right_parenthesis                          = "\u{0029}"; // )
    const asterisk                                   = "\u{002a}"; // *
    const plus_sign                                  = "\u{002b}"; // +
    const comma                                      = "\u{002c}"; // ,
    const hyphen_minus                               = "\u{002d}"; // -
    const full_stop                                  = "\u{002e}"; // .
    const slash_solidus                              = "\u{002f}"; // /
    const digit_zero                                 = "\u{0030}"; // 0
    const period                                     = self::full_stop;
    const digit_one                                  = "\u{0031}"; // 1
    const digit_two                                  = "\u{0032}"; // 2
    const digit_three                                = "\u{0033}"; // 3
    const digit_four                                 = "\u{0034}"; // 4
    const digit_five                                 = "\u{0035}"; // 5
    const digit_six                                  = "\u{0036}"; // 6
    const digit_seven                                = "\u{0037}"; // 7
    const digit_eight                                = "\u{0038}"; // 8
    const digit_nine                                 = "\u{0039}"; // 9
    const colon                                      = "\u{003a}"; // :
    const semicolon                                  = "\u{003b}"; // ;
    const less_than_sign                             = "\u{003c}"; // <
    const equal_sign                                 = "\u{003d}"; // =
    const greater_than_sign                          = "\u{003e}"; // >
    const question_mark                              = "\u{003f}"; // ?
    const at_sign                                    = "\u{0040}"; // @
    const latin_capital_letter_a                     = "\u{0041}"; // A
    const latin_capital_letter_b                     = "\u{0042}"; // B
    const latin_capital_letter_c                     = "\u{0043}"; // C
    const latin_capital_letter_d                     = "\u{0044}"; // D
    const latin_capital_letter_e                     = "\u{0045}"; // E
    const latin_capital_letter_f                     = "\u{0046}"; // F
    const latin_capital_letter_g                     = "\u{0047}"; // G
    const latin_capital_letter_h                     = "\u{0048}"; // H
    const latin_capital_letter_i                     = "\u{0049}"; // I
    const latin_capital_letter_j                     = "\u{004a}"; // J
    const latin_capital_letter_k                     = "\u{004b}"; // K
    const latin_capital_letter_l                     = "\u{004c}"; // L
    const latin_capital_letter_m                     = "\u{004d}"; // M
    const latin_capital_letter_n                     = "\u{004e}"; // N
    const latin_capital_letter_o                     = "\u{004f}"; // O
    const latin_capital_letter_p                     = "\u{0050}"; // P
    const latin_capital_letter_q                     = "\u{0051}"; // Q
    const latin_capital_letter_r                     = "\u{0052}"; // R
    const latin_capital_letter_s                     = "\u{0053}"; // S
    const latin_capital_letter_t                     = "\u{0054}"; // T
    const latin_capital_letter_u                     = "\u{0055}"; // U
    const latin_capital_letter_v                     = "\u{0056}"; // V
    const latin_capital_letter_w                     = "\u{0057}"; // W
    const latin_capital_letter_x                     = "\u{0058}"; // X
    const latin_capital_letter_y                     = "\u{0059}"; // Y
    const latin_capital_letter_z                     = "\u{005a}"; // Z
    const left_square_bracket                        = "\u{005b}"; // [
    const backslash                                  = "\u{005c}"; // \
    const right_square_bracket                       = "\u{005d}"; // ]
    const circumflex_accent                          = "\u{005e}"; // ^
    const low_line                                   = "\u{005f}"; // _
    const grave_accent                               = "\u{0060}"; // `
    const latin_small_letter_a                       = "\u{0061}"; // a
    const latin_small_letter_b                       = "\u{0062}"; // b
    const latin_small_letter_c                       = "\u{0063}"; // c
    const latin_small_letter_d                       = "\u{0064}"; // d
    const latin_small_letter_e                       = "\u{0065}"; // e
    const latin_small_letter_f                       = "\u{0066}"; // f
    const latin_small_letter_g                       = "\u{0067}"; // g
    const latin_small_letter_h                       = "\u{0068}"; // h
    const latin_small_letter_i                       = "\u{0069}"; // i
    const latin_small_letter_j                       = "\u{006a}"; // j
    const latin_small_letter_k                       = "\u{006b}"; // k
    const latin_small_letter_l                       = "\u{006c}"; // l
    const latin_small_letter_m                       = "\u{006d}"; // m
    const latin_small_letter_n                       = "\u{006e}"; // n
    const latin_small_letter_o                       = "\u{006f}"; // o
    const latin_small_letter_p                       = "\u{0070}"; // p
    const latin_small_letter_q                       = "\u{0071}"; // q
    const latin_small_letter_r                       = "\u{0072}"; // r
    const latin_small_letter_s                       = "\u{0073}"; // s
    const latin_small_letter_t                       = "\u{0074}"; // t
    const latin_small_letter_u                       = "\u{0075}"; // u
    const latin_small_letter_v                       = "\u{0076}"; // v
    const latin_small_letter_w                       = "\u{0077}"; // w
    const latin_small_letter_x                       = "\u{0078}"; // x
    const latin_small_letter_y                       = "\u{0079}"; // y
    const latin_small_letter_z                       = "\u{007a}"; // z
    const left_curly_bracket                         = "\u{007b}"; // {
    const vertical_bar                               = "\u{007c}"; // |
    const right_curly_bracket                        = "\u{007d}"; // }
    const tilde                                      = "\u{007e}"; // ~
    const inverted_exclamation_mark                  = "\u{00a1}"; // ¡
    const cent_sign                                  = "\u{00a2}"; // ¢
    const pound_sign                                 = "\u{00a3}"; // £
    const currency_sign                              = "\u{00a4}"; // ¤
    const yen_sign                                   = "\u{00a5}"; // ¥
    const broken_bar                                 = "\u{00a6}"; // ¦
    const section_sign                               = "\u{00a7}"; // §
    const diaeresis_umlaut                           = "\u{00a8}"; // ¨
    const copyright_sign                             = "\u{00a9}"; // ©
    const feminine_ordinal_indicator                 = "\u{00aa}"; // ª
    const left_pointing_double_angle_quotation_mark  = "\u{00ab}"; // «
    const not_sign                                   = "\u{00ac}"; // ¬
    const soft_hyphen                                = "\u{00ad}"; // ­
    const registered_sign                            = "\u{00ae}"; // ®
    const macron                                     = "\u{00af}"; // ¯
    const degree_symbol                              = "\u{00b0}"; // °
    const plus_minus_sign                            = "\u{00b1}"; // ±
    const superscript_two                            = "\u{00b2}"; // ²
    const superscript_three                          = "\u{00b3}"; // ³
    const acute_accent                               = "\u{00b4}"; // ´
    const micro_sign                                 = "\u{00b5}"; // µ
    const pilcrow_sign                               = "\u{00b6}"; // ¶
    const middle_dot                                 = "\u{00b7}"; // ·
    const cedilla                                    = "\u{00b8}"; // ¸
    const superscript_one                            = "\u{00b9}"; // ¹
    const masculine_ordinal_indicator                = "\u{00ba}"; // º
    const right_pointing_double_angle_quotation_mark = "\u{00bb}"; // »
    const vulgar_fraction_one_quarter                = "\u{00bc}"; // ¼
    const vulgar_fraction_one_half                   = "\u{00bd}"; // ½
    const vulgar_fraction_three_quarters             = "\u{00be}"; // ¾
    const inverted_question_mark                     = "\u{00bf}"; // ¿
    const latin_capital_letter_a_with_acute          = "\u{00c1}"; // Á
    const latin_capital_letter_a_with_circumflex     = "\u{00c2}"; // Â
    const latin_capital_letter_a_with_tilde          = "\u{00c3}"; // Ã
    const latin_capital_letter_a_with_diaeresis      = "\u{00c4}"; // Ä
    const latin_capital_letter_a_with_ring_above     = "\u{00c5}"; // Å
    const latin_capital_letter_ae                    = "\u{00c6}"; // Æ
    const latin_capital_letter_c_with_cedilla        = "\u{00c7}"; // Ç
    const latin_capital_letter_e_with_grave          = "\u{00c8}"; // È
    const latin_capital_letter_e_with_acute          = "\u{00c9}"; // É
    const latin_capital_letter_e_with_circumflex     = "\u{00ca}"; // Ê
    const latin_capital_letter_e_with_diaeresis      = "\u{00cb}"; // Ë
    const latin_capital_letter_i_with_grave          = "\u{00cc}"; // Ì
    const latin_capital_letter_i_with_acute          = "\u{00cd}"; // Í
    const latin_capital_letter_i_with_circumflex     = "\u{00ce}"; // Î
    const latin_capital_letter_i_with_diaeresis      = "\u{00cf}"; // Ï
    const latin_capital_letter_eth                   = "\u{00d0}"; // Ð
    const latin_capital_letter_n_with_tilde          = "\u{00d1}"; // Ñ
    const latin_capital_letter_o_with_grave          = "\u{00d2}"; // Ò
    const latin_capital_letter_o_with_acute          = "\u{00d3}"; // Ó
    const latin_capital_letter_o_with_circumflex     = "\u{00d4}"; // Ô
    const latin_capital_letter_o_with_tilde          = "\u{00d5}"; // Õ
    const latin_capital_letter_o_with_diaeresis      = "\u{00d6}"; // Ö
    const latin_capital_letter_u_with_grave          = "\u{00d9}"; // Ù
    const latin_capital_letter_u_with_acute          = "\u{00da}"; // Ú
    const latin_capital_letter_u_with_circumflex     = "\u{00db}"; // Û
    const latin_capital_letter_u_with_diaeresis      = "\u{00dc}"; // Ü
    const latin_capital_letter_y_with_acute          = "\u{00dd}"; // Ý
    const latin_capital_letter_thorn                 = "\u{00de}"; // Þ
    const latin_small_letter_sharp_s                 = "\u{00df}"; // ß
    const latin_small_letter_a_with_grave            = "\u{00e0}"; // à
    const latin_small_letter_a_with_acute            = "\u{00e1}"; // á
    const latin_small_letter_a_with_circumflex       = "\u{00e2}"; // â
    const latin_small_letter_a_with_tilde            = "\u{00e3}"; // ã
    const latin_small_letter_a_with_diaeresis        = "\u{00e4}"; // ä
    const latin_small_letter_a_with_ring_above       = "\u{00e5}"; // å
    const latin_small_letter_ae                      = "\u{00e6}"; // æ
    const latin_small_letter_c_with_cedilla          = "\u{00e7}"; // ç
    const latin_small_letter_e_with_grave            = "\u{00e8}"; // è
    const latin_small_letter_e_with_acute            = "\u{00e9}"; // é
    const latin_small_letter_e_with_circumflex       = "\u{00ea}"; // ê
    const latin_small_letter_e_with_diaeresis        = "\u{00eb}"; // ë
    const latin_small_letter_i_with_grave            = "\u{00ec}"; // ì
    const latin_small_letter_i_with_acute            = "\u{00ed}"; // í
    const latin_small_letter_i_with_circumflex       = "\u{00ee}"; // î
    const latin_small_letter_i_with_diaeresis        = "\u{00ef}"; // ï
    const latin_small_letter_eth                     = "\u{00f0}"; // ð
    const latin_small_letter_n_with_tilde            = "\u{00f1}"; // ñ
    const latin_small_letter_o_with_grave            = "\u{00f2}"; // ò
    const latin_small_letter_o_with_acute            = "\u{00f3}"; // ó
    const latin_small_letter_o_with_circumflex       = "\u{00f4}"; // ô
    const latin_small_letter_o_with_tilde            = "\u{00f5}"; // õ
    const latin_small_letter_o_with_diaeresis        = "\u{00f6}"; // ö
    const latin_small_letter_u_with_grave            = "\u{00f9}"; // ù
    const latin_small_letter_u_with_acute            = "\u{00fa}"; // ú
    const latin_small_letter_u_with_circumflex       = "\u{00fb}"; // û
    const latin_small_letter_u_with_diaeresis        = "\u{00fc}"; // ü
    const latin_small_letter_y_with_acute            = "\u{00fd}"; // ý
    const latin_small_letter_thorn                   = "\u{00fe}"; // þ
    const latin_small_letter_y_with_diaeresis        = "\u{00ff}"; // ÿ
};
